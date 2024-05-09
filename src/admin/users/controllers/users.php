<?php
$title = 'Manage Users';

$usersColumns = ['id' => "ID", 'name' => 'Name', 'email' => 'Email', 'dob' => 'Date of Birth'];

$database = new Database();

// Get all users
$query = 'SELECT * FROM users';
$users = $database->query($query)->qAll();

// Combine the first and last name of the user
foreach ($users as $key => $user) {
  $users[$key]['name'] = $user['fname'] . ' ' . $user['lname'];
}



require('src/admin/users/views/users.view.php');
