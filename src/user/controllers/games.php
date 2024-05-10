<?php
$title = 'Games';
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
GROUP BY 
    games.id
HAVING 
    stock > 0
';
$games = $database->query($query)->qAll();
require('src/user/views/games.view.php');
