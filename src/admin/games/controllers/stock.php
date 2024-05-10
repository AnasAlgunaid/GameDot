<?php
$title = 'Stock Page';

// Get the game id
$game_id = $_GET['game_id'];

// Dtabase connection
$database = new Database();

// Post request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['add_stock_form'])) {
    // Add to stock
    if (isset($_POST['new_game_code'])) {
      // Check length > 3
      if (strlen($_POST['new_game_code']) < 3) {
        $errors[] = 'Game code must be at least 3 characters';
      } else {
        // Insert into stock
        $query = 'INSERT INTO stock (game_id, game_code) VALUES (:game_id, :game_code)';
        $database->query($query, ['game_id' => $game_id, 'game_code' => $_POST['new_game_code']])->q();

        // Redirect to the same page using GET method
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit; // Make sure to stop execution after the redirect
      }
    }
  } elseif (isset($_POST['delete_stock_form'])) {
    // Delete from stock
    if (isset($_POST['delete_stock'])) {
      // Delete from stock
      $query = 'DELETE FROM stock WHERE id = :stock_id';
      $database->query($query, ['stock_id' => $_POST['delete_stock']])->q();

      // Redirect to the same page using GET method
      header("Location: " . $_SERVER['REQUEST_URI']);
      exit; // Make sure to stop execution after the redirect
    }
  }
}

// Stock columns
$stockColumns = [
  'id' => 'ID',
  'game_code' => 'Game Code',
];

// Get the game data
$query = 'SELECT * FROM games WHERE id = :id';
$game = $database->query($query, ['id' => $game_id])->qOrAbort();

// Get the stock data
$query = 'SELECT * FROM stock WHERE game_id = :id';
$stock = $database->query($query, ['id' => $game_id])->qAll();


require('src/admin/games/views/stock.view.php');
