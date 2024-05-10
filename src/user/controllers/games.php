<?php
$title = 'Games';

// Search query
$search = $_GET['search'] ?? '';

// Database connection
$database = new Database();

// Get the games 
$query = '
SELECT 
    games.*, 
    COUNT(stock.game_id) AS stock
FROM 
    games
LEFT JOIN 
    stock ON games.id = stock.game_id
WHERE
    games.name LIKE :search 
GROUP BY 
    games.id
HAVING 
    stock > 0
';
$games = $database->query($query, ["search" => '%' . $search . '%'])->qAll();
require('src/user/views/games.view.php');
