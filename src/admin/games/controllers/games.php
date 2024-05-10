<?php
$title = 'Manage Games';
$gamesColumns = [
    'id' => 'ID',
    'name' => 'Name',
    'platform' => 'Platform',
    'release_date' => 'Release Date',
    'price' => 'Price',
    'publisher' => 'Publisher',
    'stock' => 'Stock',
];



// Database connection
$database = new Database();
$query = 'SELECT 
    games.*, 
    COUNT(stock.game_id) AS stock
FROM 
    games
LEFT JOIN 
    stock ON games.id = stock.game_id
GROUP BY 
    games.id';



$games = $database->query($query)->qAll();



require('src/admin/games/views/games.view.php');
