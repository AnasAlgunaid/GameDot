<?php
$title = 'Edit Game';
// Database connection
$database = new Database();

// require the form validation file
require('games_functions.php');

// Get the game id
$game_id = $_GET['game_id'];

// Get the genres
$query = 'SELECT * FROM genres';
$genres = $database->query($query)->qAll();

// Post request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

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


    // Update the game
    $query = 'UPDATE games SET name = :name, price = :price, description = :description, publisher = :publisher, release_date = :release_date, platform = :platform, age_rating = :age_rating WHERE id = :id';

    $database->query($query, [
      'name' => $name,
      'price' => $price,
      'description' => $description,
      'publisher' => $publisher,
      'release_date' => $releaseDate,
      'platform' => $platform,
      'age_rating' => $ageRating,
      'id' => $game_id
    ])->q();

    // Delete and Update the genres
    $query = 'DELETE FROM game_genres WHERE game_id = :game_id';
    $database->query($query, ['game_id' => $game_id])->q();

    foreach ($genresInput as $genreInput) {
      $query = 'INSERT INTO game_genres (game_id, genre_id) VALUES (:game_id, :genre_id)';
      $database->query($query, ['game_id' => $game_id, 'genre_id' => $genreInput])->q();
    }

    // Commit transaction
    $database->commit();

    // Success message
    $_SESSION['editGameSuccess'] = 'Game updated successfully';

    // Redirect to the games page
    header('Location: /gamedot/admin/games/edit/' . $game_id);
    exit;
  } catch (Exception $e) {
    // Rollback transaction
    $database->rollBack();

    // Set error message
    $_SESSION['editGameErrors'][] = $e->getMessage();

    // Redirect to the add game page
    header('Location: /gamedot/admin/games/edit/' . $game_id);
    exit;
  }
}


// Get the game genres
$query = 'SELECT genre_id FROM game_genres WHERE game_id = :game_id';
$gameGenres = $database->query($query, ['game_id' => $game_id])->qAll();


// Get the game data
$query = 'SELECT * FROM games WHERE id = :id';

$game = $database->query($query, ['id' => $game_id])->qOrAbort();


require('src/admin/games/views/edit_game.view.php');
