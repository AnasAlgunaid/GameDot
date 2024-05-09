<?php
$title = 'User Page';

$user_id = $_GET['user_id'];
// Get user data
$database = new Database();
$query = 'SELECT * FROM users WHERE id = :user_id';

$user = $database->query($query, ['user_id' => $user_id])->qOrAbort();


require('src/admin/users/views/user.view.php');
