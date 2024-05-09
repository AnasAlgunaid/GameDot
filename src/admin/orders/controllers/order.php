<?php
$title = 'Order Page';
$orderColumns = [
  'id' => "ID",
  'user_email' => "User Email",
  'total_price' => "Total Price",
  'order_date' => "Order Date",
  'payment_method' => "Payment Method",
  'items' => "Items"
];

$database = new Database();

// Get order data
$order_id = $_GET['order_id'];
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
          WHERE 
              orders.id = :order_id
          GROUP BY 
              orders.id';

$order = $database->query($query, ['order_id' => $order_id])->qOrAbort();




$orderItemsColumns = [
  'game_id' => "Game ID",
  'game_name' => "Game Name",
  'quantity' => "Quantity",
  'subtotal' => "Subtotal",
];

// Get order items
$query = 'SELECT 
    order_items.*, 
    games.name game_name
FROM 
    order_items 
JOIN 
    games ON order_items.game_id = games.id
WHERE 
    order_items.order_id = :order_id
';

$orderItems = $database->query($query, ['order_id' => $order_id])->qAll();




require('src/admin/orders/views/order.view.php');
