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


// Validate image
function validateImage($image)
{

  // Check if the 'error' key exists in the $image array
  if (!isset($image['error'])) {
    return 'Undefined error';
  }

  if ($image['error'] !== 0) {
    // Print the error message
    return $image['error'];
  }
  $maxFileSize = 1024 * 1024 * 10;
  if ($image['size'] > $maxFileSize) {
    return 'The image size is too large';
  }

  $imageFileType = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
  if (!in_array($imageFileType, ['jpg', 'jpeg', 'png'])) {
    return 'Only JPG, JPEG, PNG files are allowed';
  }

  return null;
}

// Validate multiple images
function validateImages($images)
{
  foreach ($images['error'] as $key => $error) {
    $image = [
      'name' => $images['name'][$key],
      'type' => $images['type'][$key],
      'tmp_name' => $images['tmp_name'][$key],
      'error' => $error,
      'size' => $images['size'][$key]
    ];

    $validationError = validateImage($image);
    if ($validationError) {
      return $validationError;
    }
  }

  return null;
}

// Rename the image
function renameImage($image)
{
  return uniqid() . '_' . $image['name'];
}

// Rename the images
function renameImages($images)
{
  $renamedImages = [];
  foreach ($images['name'] as $key => $imageName) {
    // Combine a unique identifier with the original image name
    $renamedImages[$key] = uniqid() . '_' . $imageName;
  }

  return $renamedImages;
}
