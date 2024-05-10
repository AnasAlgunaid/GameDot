<?php
$title = 'Game Page';
// Get the game ID from the URL
$game_id = $_GET["game_id"];

// Database connection
$database = new Database();

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

// Get the reviews for the game
$query = 'SELECT reviews.*, AVG(reviews.rating) AS avg_rating, CONCAT(users.fname, " ", users.lname) AS full_name
          FROM reviews 
          JOIN users ON reviews.user_id = users.id
          WHERE reviews.game_id = :id';

// $query = 'SELECT * FROM reviews WHERE game_id = :id';
$reviews = $database->query($query, ['id' => $game_id])->qAll();

// Get the average rating for the game
$avg_rating = isset($reviews[0]['avg_rating']) ? number_format((float)$reviews[0]['avg_rating'], 1) : 0;


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



require('src/user/views/game_page.view.php');
