<?php
$title = 'Game Page';

// Get the game ID from the URL
$game_id = $_GET["game_id"];

$database = new Database();

// Get the game
$query = "SELECT * FROM games WHERE id = :id";
$game = $database->query($query, ['id' => $game_id])->qOrAbort();

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

require('src/admin/games/views/game.view.php');
