<?php
$title = 'Admin Home';
$database = new Database();

// Get total number of users 
$query = 'SELECT COUNT(*) AS totalUsers FROM users';
$totalUsers = $database->query($query)->qOrAbort()['totalUsers'];

// Get total number of games
$query = 'SELECT COUNT(*) AS totalGames FROM games';
$totalGames = $database->query($query)->qOrAbort()['totalGames'];

// Get total number of orders
$query = 'SELECT COUNT(*) AS totalOrders FROM orders';
$totalOrders = $database->query($query)->qOrAbort()['totalOrders'];

// Get total sales
$query = 'SELECT SUM(total_price) AS totalSales FROM orders';
$totalSales = $database->query($query)->qOrAbort()['totalSales'];
// Format the total sales to 2 decimal places
$totalSales = number_format($totalSales, 2);


$ordersColumns = [
    'id' => "ID",
    'user_email' => "User Email",
    'total_price' => "Total Price",
    'order_date' => "Order Date",
    'payment_method' => "Payment Method",
    'items' => "Items"
];

// Get last 10 orders
$query = 'SELECT 
              orders.*, 
              users.email AS user_email,
              COUNT(order_items.id) AS items
          FROM 
              orders 
          JOIN 
              users ON orders.user_id = users.id
          LEFT JOIN 
              order_items ON orders.id = order_items.order_id
          GROUP BY 
              orders.id
          ORDER BY 
              orders.order_date DESC
          LIMIT 
              10    
              ';

$lastOrders = $database->query($query)->qAll();

require('src/admin/main/views/index.view.php');
