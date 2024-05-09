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
function abort($message)
{
  $ErrorMessage = $message;
  require('src/views/errors/error.php');
  die();
}
