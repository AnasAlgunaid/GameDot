<?php
require("core/functions.php");
require("core/database.php");


$routes = [
  newRoute("/") => __DIR__ . "/src/user/controllers/index.php",
  newRoute("/signup") => __DIR__ . "/src/user/controllers/signup.php",
  newRoute("/signin") => __DIR__ . "/src/user/controllers/signin.php",
  newRoute("/games") => "src/user/controllers/games.php",
  // newRoute("/games/") => __DIR__ . "/src/user/controllers/game_page.php",
  newRoute("/genres") => __DIR__ . "/src/user/controllers/genres.php",
  newRoute("/checkout") => __DIR__ . "/src/user/controllers/checkout.php",
  newRoute("/cart") => __DIR__ . "/src/user/controllers/cart.php",
  newRoute("/contactus") => __DIR__ . "/src/common/controllers/contactus.php",
  newRoute("/admin/signin") => __DIR__ . "/src/admin/main/controllers/signin_admin.php",
  newRoute("/admin/") => __DIR__ . "/src/admin/main/controllers/index.php",
  newRoute("/admin/games/") => __DIR__ . "/src/admin/games/controllers/games.php",
  newRoute("/admin/games/add") => __DIR__ . "/src/admin/games/controllers/add_game.php",
  newRoute("/admin/games/edit") => __DIR__ . "/src/admin/games/controllers/edit_game.php",
  newRoute("/admin/users/") => __DIR__ . "/src/admin/users/controllers/users.php",
  // newRoute("/admin/users/user") => __DIR__ . "/src/admin/users/controllers/user.php",
  newRoute("/admin/orders/") => __DIR__ . "/src/admin/orders/controllers/orders.php",
  newRoute("/admin/orders/order") => __DIR__ . "/src/admin/orders/controllers/order.php",
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
} else if (preg_match('/\/games\/(\d+)$/', $uri, $matches)) {
  $id = $matches[1];
  $routes[$uri] = __DIR__ . "/src/user/controllers/game_page.php";
  $_GET['game_id'] = $id;
} else if (preg_match('/\/admin\/users\/(\d+)$/', $uri, $matches)) {
  $id = $matches[1];
  $routes[$uri] = __DIR__ . "/src/admin/users/controllers/user.php";
  $_GET['user_id'] = $id;
} else if (preg_match('/\/admin\/orders\/(\d+)$/', $uri, $matches)) {
  $id = $matches[1];
  $routes[$uri] = __DIR__ . "/src/admin/orders/controllers/order.php";
  $_GET['order_id'] = $id;
}

if (array_key_exists($uri, $routes)) {
  require($routes[$uri]);
} else {
  abort("404 Not Found");
}
