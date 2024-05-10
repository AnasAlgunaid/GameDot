<?php
$title = 'User Page';

$user_id = $_GET['user_id'];
// Get user data
$database = new Database();
$query = 'SELECT * FROM users WHERE id = :user_id';

$user = $database->query($query, ['user_id' => $user_id])->qOrAbort();

// Get the orders of the user
$query = 'SELECT 
              orders.*, 
              COUNT(order_items.id) AS items
          FROM 
              orders 
          LEFT JOIN 
              order_items ON orders.id = order_items.order_id
          WHERE
              orders.user_id = :user_id
          GROUP BY 
              orders.id
              ';
$orders = $database->query($query, ['user_id' => $user_id])->qAll();

// Define the columns of the orders table
$ordersColumns = [
  'id' => "ID",
  'user_email' => "User Email",
  'total_price' => "Total Price",
  'order_date' => "Order Date",
  'payment_method' => "Payment Method",
  'items' => "Items"
];

// Add email to the orders 
foreach ($orders as $key => $order) {
  $orders[$key]['user_email'] = $user['email'];
}



require('src/admin/users/views/user.view.php');
