<?php
$title = 'Home';


// If the user is admin redirect to the admin page

if (isset($_SESSION['admin'])) {
    // Message to the user that he is admin if he tries to access the user page he should logout first
    $_SESSION['adminMessage'] = 'You are an admin, please logout first to access the user page.';

    header('Location: /gamedot/admin/');
    exit;
}

$gamesColumns = [
    'main_image_url' => 'Main Image',
    'name' => 'Name',
    'platform' => 'Platform',
    'price' => 'Price',
    'stock' => 'Stock',
];

// Database connection
$database = new Database();

// Get the genres
$query = 'SELECT name FROM genres';
$genres = $database->query($query)->qAll();

// Colors for the genres
$genresColors = [
    'action' => 'bg-red-500',
    'adventure' => 'bg-blue-500',
    'role-playing' => 'bg-emerald-500',
    'racing' => 'bg-green-500',
    'sports' => 'bg-yellow-500',
    'strategy' => 'bg-indigo-500',
    'simulation' => 'bg-pink-500',
    'puzzle' => 'bg-purple-500',
    'casual' => 'bg-gray-500',
    'arcade' => 'bg-red-500',
    'card' => 'bg-blue-500',
    'board' => 'bg-green-500',
    'trivia' => 'bg-yellow-500',
    'educational' => 'bg-indigo-500',
    'music' => 'bg-pink-500',
    'fighting' => 'bg-purple-500',
    'shooter' => 'bg-gray-500',
    'platformer' => 'bg-red-500',
    'rpg' => 'bg-blue-500',
    'horror' => 'bg-green-500',
    'sandbox' => 'bg-yellow-500',
    'survival' => 'bg-indigo-500',
    'battle royale' => 'bg-pink-500',
    'mmo' => 'bg-purple-500',
    'open world' => 'bg-gray-500',
    'stealth' => 'bg-red-500',
    'party' => 'bg-blue-500',
    'roguelike' => 'bg-green-500',
    'rhythm' => 'bg-yellow-500',
    'tactical' => 'bg-indigo-500',
    'turn-based' => 'bg-pink-500',
    'visual novel' => 'bg-purple-500',
];

// Get the latest games
$query =
    'SELECT 
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
ORDER BY 
    games.id DESC
LIMIT 
    10    
';
$latestGames = $database->query($query)->qAll();

// Get the best deals
$query =
    'SELECT 
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
ORDER BY 
    games.price ASC
LIMIT 
    10    
';
$bestDealsGames = $database->query($query)->qAll();




require('src/user/views/index.view.php');
