<?php



// Database connection
$database = new Database();

// Title of the page
$title = 'Admin Settings';

// Admin ID
$admin_id = $_SESSION['admin']['id'];

// Handle the post request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['update_profile_form'])) {
    // Validate the email
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $profileErrors[] = 'Invalid email.';
    }

    // Check if the email is already in use
    $query = 'SELECT * FROM admins WHERE email = :email AND id != :admin_id';
    $admin = $database->query($query, ['email' => $_POST['email'], 'admin_id' => $admin_id])->q();
    if ($admin) {
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

    // Check if there are no profileErrors
    if (!isset($profileErrors)) {
      // Update the admin
      $query = 'UPDATE admins SET fname = :fname, lname = :lname, email = :email WHERE id = :admin_id';
      $database->query($query, [
        'fname' => $_POST['fname'],
        'lname' => $_POST['lname'],
        'email' => $_POST['email'],
        'admin_id' => $admin_id
      ])->q();

      // Store success message in session
      $_SESSION['profileSuccess'] = 'Profile updated successfully.';


      // Get the current URL
      $url = $_SERVER['REQUEST_URI'];

      // Redirect to the same page
      header("Location: $url");
      exit;
    }
  } elseif (isset($_POST['update_password_form'])) {
    // Validate the old password 
    $query = 'SELECT * FROM admins WHERE id = :admin_id';
    $admin = $database->query($query, ['admin_id' => $admin_id])->q();

    if (!password_verify($_POST['old_password'], $admin['password'])) {
      $passwordErrors[] = 'Old password is incorrect.';
    } elseif (strlen($_POST['new_password']) < 8) {
      // Validate the new password 
      $passwordErrors[] = 'Password must be at least 8 characters.';
    } elseif ($_POST['new_password'] !== $_POST['confirm_password']) {
      $passwordErrors[] = 'Passwords do not match.';
    }

    // Check if there are no passwordErrors
    if (!isset($passwordErrors)) {
      // Update the password
      $query = 'UPDATE admins SET password = :password WHERE id = :admin_id';
      $database->query($query, [
        'password' => password_hash($_POST['new_password'], PASSWORD_DEFAULT),
        'admin_id' => $admin_id
      ])->q();

      // Store success message in session
      $_SESSION['passwordSuccess'] = 'Password updated successfully.';

      // Get the current URL
      $url = $_SERVER['REQUEST_URI'];

      // Redirect to the same page
      header("Location: $url");
      exit;
    }
  }
}


// Get admin data
$query = 'SELECT * FROM admins WHERE id = :admin_id';
$admin = $database->query($query, ['admin_id' => $admin_id])->qOrAbort();

require('src/admin/settings/views/settings.view.php');
