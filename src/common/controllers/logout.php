<?php
// Start the session
session_start();

// Logout
unset($_SESSION['user']);
unset($_SESSION['admin']);

// Redirect to the home page for user and admin
header('Location: /gamedot');
exit;