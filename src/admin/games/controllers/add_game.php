<?php
$title = 'Add game';

// require the form validation file
require('games_functions.php');

// Database connection
$database = new Database();

// Get the genres
$query = 'SELECT * FROM genres';
$genres = $database->query($query)->qAll();

// Post request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Define the relative path to the media folder
  $img_relative_folder = '/gamedot/media/games/';

  // Obtain the root path of the server
  $root_path = $_SERVER['DOCUMENT_ROOT'];

  // Combine the root path with the relative path to form the absolute path
  $img_folder = $root_path . $img_relative_folder;

  try {
    // Start transaction
    $database->beginTransaction();

    // Get the post data
    $name = $_POST['gameName'];
    $price = $_POST['gamePrice'];
    $description = $_POST['gameDescription'];
    $genresInput = $_POST['gameGenres'] ?? [];
    $publisher = $_POST['gamePublisher'];
    $releaseDate = $_POST['gameReleaseDate'];
    $platform = $_POST['gamePlatform'];
    $ageRating = $_POST['gameAgeRating'];

    // Perform validation
    $validations = [
      validateName($name),
      validatePrice($price),
      validateDescription($description),
      validateGenres($genresInput, $genres),
      validatePublisher($publisher),
      validateReleaseDate($releaseDate),
      validatePlatform($platform),
      validateAgeRating($ageRating)
    ];

    // Check if any validation failed
    if (in_array(false, $validations)) {
      throw new Exception("Validation failed");
    }

    // Get the main image
    $mainImage = $_FILES['mainImage'];

    // Validate the Main Image
    if (validateImage($mainImage)) {
      throw new Exception(validateImage($mainImage));
    }

    // Validate the count of the main image
    // die(var_dump($mainImage['name']));
    // if (count($mainImage['name']) > 1) {
    //   throw new Exception("Only one main image allowed");
    // }

    // Get the screenshots
    $screenshots = $_FILES['screenshots'];

    // Validate the Screenshots
    if (validateImages($screenshots)) {
      throw new Exception(validateImages($screenshots));
    }


    // Validate the count of the screenshots
    if (count($screenshots['name']) > 10) {
      throw new Exception("Only 10 screenshots allowed");
    }

    // Rename the main image
    $mainImageName = renameImage($mainImage);

    // Move the main image
    move_uploaded_file($mainImage['tmp_name'], $img_folder . $mainImageName);

    // Rename the screenshots
    $screenshotNames = renameImages($screenshots);

    // Move the screenshots and store the names
    foreach ($screenshots['tmp_name'] as $key => $screenshot) {
      move_uploaded_file($screenshot, $img_folder . $screenshotNames[$key]);
    }

    // Insert the game
    $query = 'INSERT INTO games (name, price, description, publisher, release_date, platform, age_rating, main_image_url) VALUES (:name, :price, :description, :publisher, :release_date, :platform, :age_rating, :main_image_url)';
    $database->query($query, ['name' => $name, 'price' => $price, 'description' => $description, 'publisher' => $publisher, 'release_date' => $releaseDate, 'platform' => $platform, 'age_rating' => $ageRating, 'main_image_url' => $img_relative_folder . $mainImageName]);

    // Get the game ID
    $gameId = $database->getLastInsertId();

    // Insert the genres
    foreach ($genresInput as $genreInput) {
      $query = 'INSERT INTO game_genres (game_id, genre_id) VALUES (:game_id, :genre_id)';
      $database->query($query, ['game_id' => $gameId, 'genre_id' => $genreInput]);
    }

    // Insert the screenshots
    foreach ($screenshotNames as $screenshotName) {
      $query = 'INSERT INTO media (game_id, media_url) VALUES (:game_id, :media_url)';
      $database->query($query, ['game_id' => $gameId, 'media_url' => $img_relative_folder  . $screenshotName]);
    }

    // Commit transaction
    $database->commit();

    // Success message
    $_SESSION['addGameSuccess'] = 'Game added successfully';

    // Redirect to the games page
    header('Location: /gamedot/admin/games/');
    exit;
  } catch (Exception $e) {
    // Rollback transaction
    $database->rollBack();

    // Set error message
    $_SESSION['addGameErrors'][] = $e->getMessage();

    // Redirect to the add game page
    header('Location: /gamedot/admin/games/add');
    exit;
  }
}



require('src/admin/games/views/add_game.view.php');
