<?php
// Start the session
session_start();

// Database connection
$database = new Database();

// Title of the page
$title = 'Profile';

// User ID
$user_id = $_SESSION['user']['id'];

// Handle the post request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['update_profile_form'])) {
    // Validate the email
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $profileErrors[] = 'Invalid email.';
    }

    // Check if the email is already in use
    $query = 'SELECT * FROM users WHERE email = :email AND id != :user_id';
    $user = $database->query($query, ['email' => $_POST['email'], 'user_id' => $user_id])->q();
    if ($user) {
      $profileErrors[] = 'Email already in use.';
    }

    // Validate the first name > 2 characters
    if (strlen($_POST['fname']) < 2) {
      $profileErrors[] = 'First name must be at least 2 characters.';
    }

    // Validate the last name > 2 characters
    if (strlen($_POST['lname']) < 2) {
      $profileErrors[] = 'Last name must be at least 2 characters.';
    }

    // Check if the date of birth is empty
    $dob = $_POST['dob'];
    if (empty($dob)) {
      $profileErrors[] = 'Date of birth is required';
      $dob = '';
    }

    // Check if the date of birth is a valid date
    $dobObj = DateTime::createFromFormat('Y-m-d', $dob);
    if (!$dobObj || $dobObj->format('Y-m-d') !== $dob) {
      $profileErrors[] = 'Invalid date of birth';
      $dob = '';
    }


    // Check if the date of birth is less than 8 years
    $dobObj = new DateTime($dob);
    $now = new DateTime();
    $diff = $dobObj->diff($now);
    if ($diff->y < 8) {
      $profileErrors[] = 'You must be at least 8 years old';
      $dob = '';
    }

    // Check if there are no profileErrors
    if (!isset($profileErrors)) {
      // Update the user
      $query = 'UPDATE users SET fname = :fname, lname = :lname, dob = :dob, email = :email WHERE id = :user_id';
      $database->query($query, [
        'fname' => $_POST['fname'],
        'lname' => $_POST['lname'],
        'dob' => $_POST['dob'],
        'email' => $_POST['email'],
        'user_id' => $user_id
      ])->q();

      // Redirect to the profile page
      header('Location: ./profile');
      exit;
    }
  }
}

// Get user data
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

require('src/user/views/profile.view.php');
