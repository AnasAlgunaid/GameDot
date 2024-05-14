<?php
$title = 'Games';

// Search query
$search = $_GET['search'] ?? '';

// Genre query
$genre = $_GET['genre'] ?? '';

// Database connection
$database = new Database();

// Get the games 
$query = '
SELECT 
    games.*, 
    GROUP_CONCAT(genres.name) AS genre_names,
    COUNT(stock.game_id) AS stock
FROM 
    games
LEFT JOIN 
    stock ON games.id = stock.game_id
LEFT JOIN 
    game_genres ON games.id = game_genres.game_id
LEFT JOIN 
    genres ON game_genres.genre_id = genres.id
WHERE
    games.name LIKE :search 
    AND (:genre = \'\' OR genres.name = :genre) -- Adjusted condition
GROUP BY 
    games.id
HAVING 
    stock > 0
';

$games = $database->query($query, ["search" => '%' . $search . '%', "genre" => $genre])->qAll();
require('src/user/views/games.view.php');
