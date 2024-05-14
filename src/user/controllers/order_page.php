<?php

// Database connection
$database = new Database();

// Get the order ID
$order_id = $_GET['order_id'];

// Get the user ID
$user_id = $_SESSION['user']['id'];

$orderColumns = [
    'id' => "Order ID",
    'total_price' => "Total Price",
    'order_date' => "Order Date",
    'payment_method' => "Payment Method",
];


// Check if the order belongs to the user
$query = 'SELECT * FROM orders WHERE id = :order_id AND user_id = :user_id';
$order = $database->query($query, ['order_id' => $order_id, 'user_id' => $user_id])->q();

if (!$order) {
    abort('Order not found', 404);
}


$orderItemsColumns = [
    'id' => "ID",
    'game_id' => "Game ID",
    'game_name' => "Game Name",
    'game_code' => "Game Code",
    'subtotal' => "Subtotal",
];

// Get order items
$query = 'SELECT 
    order_items.*, 
    games.name AS game_name
FROM
    order_items
JOIN
    games ON order_items.game_id = games.id
WHERE
    order_items.order_id = :order_id    
';


// Get order items
$orderItems = $database->query($query, ['order_id' => $order_id])->qAll();

// Add id to orderItems
foreach ($orderItems as $key => $orderItem) {
    $orderItems[$key]['id'] = $key + 1;
}

require('src/user/views/order_page.view.php');
