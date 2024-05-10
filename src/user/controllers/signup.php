<?php
$title = 'Sign up';

// Database connection
$database = new Database();

// Post request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['signup_form'])) {
    // Trim the input
    $_POST = array_map('trim', $_POST);

    // Get the input
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Check if the email is already taken
    $query = 'SELECT * FROM users WHERE email = :email';
    $user = $database->query($query, ['email' => $email])->q();

    if ($user) {
      $errors[] = 'Email is already taken';
      $email = '';
    }

    // Check if the first name is less than 2 characters
    if (strlen($firstName) < 2) {
      $errors[] = 'First name must be at least 2 characters';
      $firstName = '';
    }

    // Check if the last name is less than 2 characters
    if (strlen($lastName) < 2) {
      $errors[] = 'Last name must be at least 2 characters';
      $lastName = '';
    }

    // Check if the date of birth is empty
    if (empty($dob)) {
      $errors[] = 'Date of birth is required';
      $dob = '';
    }

    // Check if the date of birth is a valid date
    $dobObj = DateTime::createFromFormat('Y-m-d', $dob);
    if (!$dobObj || $dobObj->format('Y-m-d') !== $dob) {
      $errors[] = 'Invalid date of birth';
      $dob = '';
    }


    // Check if the date of birth is less than 8 years
    $dobObj = new DateTime($dob);
    $now = new DateTime();
    $diff = $dobObj->diff($now);
    if ($diff->y < 8) {
      $errors[] = 'You must be at least 8 years old';
      $dob = '';
    }

    // Check if the email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = 'Email is not valid';
      $email = '';
    }

    // Check if the password is less than 8 characters
    if (strlen($password) < 8) {
      $errors[] = 'Password must be at least 8 characters';
      $password = '';
      $confirmPassword = '';
    }

    // Check if the password and confirm password are the same
    if ($password !== $confirmPassword) {
      $errors[] = 'Passwords do not match';
      $password = '';
      $confirmPassword = '';
    }

    // Insert the user
    if (!isset($errors)) {
      $query = 'INSERT INTO users (fname, lname, dob, email, password) VALUES (:fname, :lname, :dob, :email, :password)';
      $database->query($query, [
        'fname' => $firstName,
        'lname' => $lastName,
        'dob' => $dob,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT),
      ])->q();

      // Redirect to the sign in page
      header('Location: ./signin?signup=success');
      exit;
    }
  }
}



require('src/user/views/signup.view.php');
