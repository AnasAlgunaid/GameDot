<?php

// Get the path to the header file
function getHeaderPath()
{
  return 'src/views/partials/header.php';
}

// Get the path to the footer file
function getFooterPath()
{
  return 'src/views/partials/footer.php';
}


// Abort function
function abort($message, $code = 404)
{
  http_response_code($code);
  $ErrorMessage = $message;

  require('src/views/errors/error.php');
  die();
}


// Check if the normal user is logged in
function isUserLoggedIn()
{
  return isset($_SESSION['user']);
}

// Check if the admin user is logged in
function isAdminLoggedIn()
{
  return isset($_SESSION['admin']);
}

// Abort if the user is not logged in
function abortIfUserNotLoggedIn()
{
  if (!isUserLoggedIn()) {
    abort("You must be logged in to access this page", 403);
  }
}

// Abort if the admin is not logged in
function abortIfAdminNotLoggedIn()
{
  if (!isAdminLoggedIn()) {
    abort("You must be logged in to access this page", 403);
  }
}


// Redirect to sign in page if the user is not logged in
function redirectToSignInIfNotLoggedIn()
{
  if (!isUserLoggedIn()) {
    header('Location: /gamedot/signin');
    die();
  }
}

// Redirect to sign in page if the admin is not logged in
function redirectToAdminSignInIfNotLoggedIn()
{
  if (!isAdminLoggedIn()) {
    header('Location: /gamedot/admin/signin');
    die();
  }
}
