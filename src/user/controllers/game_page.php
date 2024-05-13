<?php
$title = 'Game Page';
// Get the game ID from the URL
$game_id = $_GET["game_id"];

// Database connection
$database = new Database();

// Post request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["review_form"])) {
        // Check if the user is logged in
        if (!isset($_SESSION["user"])) {
            $_SESSION["authorizationError"] = "You must be logged in to review a game";
            $_SESSION["requestedURI"] = $_SERVER["REQUEST_URI"];
            header("Location: /gamedot/signin");
            exit;
        }

        // Check if the user has already reviewed the game
        $query = "SELECT * FROM reviews WHERE game_id = :game_id AND user_id = :user_id";
        $review = $database->query($query, ["game_id" => $game_id, "user_id" => $_SESSION["user"]["id"]])->q();

        if ($review) {
            $errors[] = "You have already reviewed this game";
        } else {
            // Trim the input
            $_POST = array_map("trim", $_POST);

            $rating = $_POST["rating"] ?? 0;
            $review_text = $_POST["review_text"] ?? '';

            // Convert the rating to an integer
            $rating = (int)$rating;

            // Check if the rating is between 1 and 5
            if ($rating < 1 || $rating > 5) {
                $errors[] = "Rating must be between 1 and 5";
            }

            // Check if the review text is more than 1000 characters
            if (strlen($review_text) > 1000) {
                $errors[] = "Review text must be less than 1000 characters";
            }

            // If there are no errors, insert the review into the database
            if (empty($errors)) {
                $query = "INSERT INTO reviews (game_id, user_id, rating, review_text) VALUES (:game_id, :user_id, :rating, :review_text)";
                $database->query(
                    $query,
                    [
                        "game_id" => $game_id,
                        "user_id" => $_SESSION["user"]["id"],
                        "rating" => $rating,
                        "review_text" => $review_text,
                    ]
                )->q();

                // Show success message
                $_SESSION['successReview'] = "Review submitted successfully";

                // Redirect to the game page
                header("Location: /gamedot/games/$game_id");
                exit;
            } else {
                $_SESSION['reviewErrors'] = $errors;
            }
        }
    }
}


// Get the game
$query = "
SELECT 
    *
FROM 
    games
WHERE 
    games.id = :id
";

$game = $database->query($query, ['id' => $game_id])->qOrAbort();

// Query to get the stock
$stockQuery = "
SELECT 
    COUNT(stock.game_id) AS stock
FROM 
    games
LEFT JOIN 
    stock ON games.id = stock.game_id
WHERE 
    games.id = :id
";
$stock = $database->query($stockQuery, ['id' => $game_id])->qOrAbort();

// Add the stock to the game array
$game['stock'] = $stock['stock'];

// Get the media for the game
$query = 'SELECT * FROM media WHERE game_id = :id';
$media = $database->query($query, ['id' => $game_id])->qAll();

// Get the genres for the game
$query = 'SELECT genres.name FROM genres JOIN game_genres ON genres.id = game_genres.genre_id WHERE game_genres.game_id = :id';
$genres = $database->query($query, ['id' => $game_id])->qAll();
$genres = array_column($genres, 'name');

// Query to count the number of similar games
$queryCountSimilar = "
    SELECT COUNT(*) AS countSimilar
    FROM games
    JOIN game_genres ON games.id = game_genres.game_id
    WHERE game_genres.genre_id IN (SELECT genre_id FROM game_genres WHERE game_id = :id)
    AND games.id != :id
";

// Prepare and execute the count query
$countSimilar = $database->query($queryCountSimilar, ['id' => $game_id])->q();


// Calculate the value of :limitOffset
$limitOffset = max(10 - $countSimilar["countSimilar"], 0);  // Ensure limitOffset is non-negative

// Get the Similar games
$query =
    '(
    -- Query for similar games based on genres
    SELECT 
        games.*, 
        COUNT(stock.game_id) AS stock
    FROM 
        games
    LEFT JOIN 
        stock ON games.id = stock.game_id
    JOIN
        game_genres ON games.id = game_genres.game_id
    WHERE
        game_genres.genre_id IN (SELECT genre_id FROM game_genres WHERE game_id = :id)
        AND games.id != :id
    GROUP BY 
        games.id
    HAVING 
        stock > 0
    LIMIT 
        10
)
UNION ALL
(
    -- Query for recent games if the number of similar games is less than 10
    SELECT 
        games.*, 
        COUNT(stock.game_id) AS stock
    FROM 
        games
    LEFT JOIN 
        stock ON games.id = stock.game_id
    WHERE
        games.id != :id
    GROUP BY 
        games.id
    HAVING 
        stock > 0
    ORDER BY
        games.id DESC
    LIMIT
        ' . $limitOffset . '
)
';
$similarGames = $database->query($query, ['id' => $game['id'], 'limitOffset' => $limitOffset])->qAll();

// Get the reviews for the game
$query = 'SELECT reviews.*, CONCAT(users.fname, " ", users.lname) AS full_name
          FROM reviews 
          JOIN users ON reviews.user_id = users.id
          WHERE reviews.game_id = :id';

// $query = 'SELECT * FROM reviews WHERE game_id = :id';
$reviews = $database->query($query, ['id' => $game_id])->qAll();

// Get the average rating for the game
$query = 'SELECT AVG(rating) AS avg_rating FROM reviews WHERE game_id = :id';
$avg_rating = $database->query($query, ['id' => $game_id])->q();

// Check if the average rating is null
if ($avg_rating['avg_rating'] === null) {
    $avg_rating['avg_rating'] = 0;
}

// Round the average rating to the nearest integer
$avg_rating = round($avg_rating['avg_rating']);

// Convert the average rating to a number
$avg_rating = (int)$avg_rating;

// Check if the user has already reviewed the game
$hasReviewed = false;
if (isset($_SESSION['user'])) {
    $query = 'SELECT * FROM reviews WHERE game_id = :game_id AND user_id = :user_id';
    $hasReviewed = $database->query($query, ['game_id' => $game_id, 'user_id' => $_SESSION['user']['id']])->q();
}





require('src/user/views/game_page.view.php');
