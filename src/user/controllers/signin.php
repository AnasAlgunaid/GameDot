<?php


$title = 'Sign In';

// Check if the user is already signed in
if (isset($_SESSION['user'])) {
  header('Location: ./');
  exit;
}

// Database connection
$database = new Database();

// Post request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['signin_form'])) {
    // Email 
    $email = $_POST['email'];

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = 'Invalid email.';
    } else {
      // Sign in
      $query = 'SELECT * FROM users WHERE email = :email';
      $user = $database->query($query, ['email' => $_POST['email']])->q();

      // Check if user exists and password is correct
      if ($user && password_verify($_POST['password'], $user['password'])) {
        // Unset the admin session if it exists
        unset($_SESSION['admin']);

        // Set session
        $_SESSION['user'] = $user;

        // Regenerate session ID to prevent session fixation
        session_regenerate_id(true);

        // Redirect to the requested URI or the home page
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
}

require('src/user/views/signin.view.php');
