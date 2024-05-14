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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete_game_form'])) {
        if (isset($_POST['delete_game'])) {


            // Delete the game
            $query = 'DELETE FROM games WHERE id = :id';
            $database->query($query, ['id' => $_POST['delete_game']])->q();

            // Set success message
            $_SESSION['deleteSuccess'] = 'Game deleted successfully';

            header("Location: /gamedot/admin/games/");
            exit;
        }
    }
}


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
