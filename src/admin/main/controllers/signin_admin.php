<?php

// Check if the admin is already signed in
if (isset($_SESSION['admin'])) {
  header('Location: ./');
  exit;
}

$title = 'Sign In Admin';

// Database connection
$database = new Database();

// Post request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['signin_form'])) {
    // Sign in
    $query = 'SELECT * FROM admins WHERE email = :email';
    $user = $database->query($query, ['email' => $_POST['email']])->q();

    // Check if user exists and password is correct
    if ($user && password_verify($_POST['password'], $user['password'])) {
      // Unset the user session if it exists
      unset($_SESSION['user']);

      // Set session
      $_SESSION['admin'] = $user;

      // Regenerate session ID to prevent session fixation
      session_regenerate_id(true);

      // Redirect the admin to the requested URI or the home page
      if (isset($_SESSION['requestedURI'])) {
        header('Location: ' . $_SESSION['requestedURI']);
        unset($_SESSION['requestedURI']);
      } else {
        header('Location: ./');
      }

      exit;
    } else {
      // Add error message
      $errors[] = 'Invalid email or password.';
    }
  }
}

require('src/admin/main/views/signin_admin.view.php');
