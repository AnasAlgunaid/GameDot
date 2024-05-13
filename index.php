<?php

session_start();

require("core/functions.php");
require("core/database.php");

$routes = [
  newRoute("/") => __DIR__ . "/src/user/controllers/index.php",
  newRoute("/signup") => __DIR__ . "/src/user/controllers/signup.php",
  newRoute("/signin") => __DIR__ . "/src/user/controllers/signin.php",
  newRoute("/games") => "src/user/controllers/games.php",
  newRoute("/profile") => "src/user/controllers/profile.php",
  newRoute("/logout") => "src/common/controllers/logout.php",
  // newRoute("/games/") => __DIR__ . "/src/user/controllers/game_page.php",
  newRoute("/genres") => __DIR__ . "/src/user/controllers/genres.php",
  newRoute("/checkout") => __DIR__ . "/src/user/controllers/checkout.php",
  newRoute("/cart") => __DIR__ . "/src/user/controllers/cart.php",
  newRoute("/contactus") => __DIR__ . "/src/common/controllers/contactus.php",
  newRoute("/admin/signin") => __DIR__ . "/src/admin/main/controllers/signin_admin.php",
  newRoute("/admin/") => __DIR__ . "/src/admin/main/controllers/index.php",
  newRoute("/admin/logout") => "src/common/controllers/logout.php",
  newRoute("/admin/profile") => "src/admin/main/controllers/profile.php",
  newRoute("/admin/games/") => __DIR__ . "/src/admin/games/controllers/games.php",
  newRoute("/admin/games/add") => __DIR__ . "/src/admin/games/controllers/add_game.php",
  newRoute("/admin/games/edit") => __DIR__ . "/src/admin/games/controllers/edit_game.php",
  newRoute("/admin/users/") => __DIR__ . "/src/admin/users/controllers/users.php",
  newRoute("/admin/settings/") => __DIR__ . "/src/admin/settings/controllers/settings.php",
  newRoute("/admin/orders/") => __DIR__ . "/src/admin/orders/controllers/orders.php",
];

// Define an array of routes that require authentication for user access
$userAuthenticatedRoutes = [
  newRoute("/profile"),
  newRoute("/checkout"),
  newRoute("/cart"),
];

// Define an array of routes that require authentication for admin access
$adminAuthenticatedRoutes = [
  newRoute("/admin/"),
  newRoute("/admin/logout"),
  newRoute("/admin/profile"),
  newRoute("/admin/games/"),
  newRoute("/admin/games/add"),
  newRoute("/admin/games/edit"),
  newRoute("/admin/users/"),
  newRoute("/admin/settings/"),
  newRoute("/admin/orders/"),
];


function newRoute($path)
{
  $projectName = '/gamedot';
  return $projectName . $path;
}


$uri = parse_url($_SERVER["REQUEST_URI"])['path'];

// Check if the URI matches the pattern for admin/games/ID
if (preg_match('/\/games\/(\d+)$/', $uri, $matches)) {
  $id = $matches[1];
  $routes[$uri] = __DIR__ . "/src/user/controllers/game_page.php";
  $_GET['game_id'] = $id;
}
if (preg_match('/\/admin\/games\/(\d+)$/', $uri, $matches)) {
  $id = $matches[1];
  $routes[$uri] = __DIR__ . "/src/admin/games/controllers/game.php";
  $_GET['game_id'] = $id;
  // Add the route to adminAuthenticatedRoutes
  array_push($adminAuthenticatedRoutes, newRoute("/admin/games/$id"));
} else if (preg_match('/\/admin\/games\/stock\/(\d+)$/', $uri, $matches)) {
  $id = $matches[1];
  $routes[$uri] = __DIR__ . "/src/admin/games/controllers/stock.php";
  $_GET['game_id'] = $id;
  // Add the route to adminAuthenticatedRoutes
  array_push($adminAuthenticatedRoutes, newRoute("/admin/games/stock/$id"));
} else if (preg_match('/\/games\/(\d+)$/', $uri, $matches)) {
  $id = $matches[1];
  $routes[$uri] = __DIR__ . "/src/user/controllers/game_page.php";
  $_GET['game_id'] = $id;
} else if (preg_match('/\/admin\/users\/(\d+)$/', $uri, $matches)) {
  $id = $matches[1];
  $routes[$uri] = __DIR__ . "/src/admin/users/controllers/user.php";
  $_GET['user_id'] = $id;
  // Add the route to adminAuthenticatedRoutes
  array_push($adminAuthenticatedRoutes, newRoute("/admin/users/$id"));
} else if (preg_match('/\/admin\/orders\/(\d+)$/', $uri, $matches)) {
  $id = $matches[1];
  $routes[$uri] = __DIR__ . "/src/admin/orders/controllers/order.php";
  $_GET['order_id'] = $id;
  // Add the route to adminAuthenticatedRoutes
  array_push($adminAuthenticatedRoutes, newRoute("/admin/orders/$id"));
} else if (preg_match('/\/orders\/(\d+)$/', $uri, $matches)) {
  $id = $matches[1];
  $routes[$uri] = __DIR__ . "/src/user/controllers/order_page.php";
  $_GET['order_id'] = $id;
  // Add the route to userAuthenticatedRoutes
  array_push($userAuthenticatedRoutes, newRoute("/orders/$id"));
}

// Check if the requested route requires authentication

if (in_array($uri, $userAuthenticatedRoutes) && !isset($_SESSION['user'])) {

  // Show Error Toaster Message and Redirect to Signin Page
  $_SESSION['authorizationError'] = "You must be logged in to access this page";

  // Add the requested URI to the session
  $_SESSION['requestedURI'] = $uri;

  // Redirect the user to the sign-in page
  header("Location: /gamedot/signin");
  exit;
}

// Check if the requested route requires authentication for admin access
if (in_array($uri, $adminAuthenticatedRoutes) && !isset($_SESSION['admin'])) {
  // Show Error Toaster Message and Redirect to Signin Page
  $_SESSION['authorizationError'] = "You must be logged in as an admin to access this page";

  // Redirect the user to the sign-in page
  header("Location: /gamedot/admin/signin");
  exit;
}

if (array_key_exists($uri, $routes)) {
  require($routes[$uri]);
} else {
  abort("404 Not Found");
}
