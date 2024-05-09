<?php
$title = 'Manage Orders';

$ordersColumns = [
    'id' => "ID",
    'user_email' => "User Email",
    'total_price' => "Total Price",
    'order_date' => "Order Date",
    'payment_method' => "Payment Method",
    'items' => "Items"
];

$database = new Database();

// Get all orders
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
              ';
$orders = $database->query($query)->qAll();





require('src/admin/orders/views/orders.view.php');
