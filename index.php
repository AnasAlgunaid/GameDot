<?php

$uri = parse_url($_SERVER["REQUEST_URI"])['path'];

// TODO: Still not completed
$routes = [
  newRoute("/") => "src/user/controllers/homepage.php",
  newRoute("/signup") => "src/user/controllers/signup.php",
  newRoute("/signin") => "src/user/controllers/signin.php",
  newRoute("/game") => "src/user/controllers/game_page.php",
  newRoute("/games") => "src/user/controllers/games.php",
  newRoute("/categories") => "src/user/controllers/categories.php",
  newRoute("/checkout") => "src/user/controllers/checkout.php",
  newRoute("/cart") => "src/user/controllers/cart.php",
  newRoute("/contactus") => "src/common/controllers/contactus.php",
  newRoute("/admin_signin") => "src/admin/controllers/signin_admin.php",
  newRoute("/admin_homepage") => "src/admin/controllers/admin_homepage.php",

];

if (array_key_exists($uri, $routes)) {
  require($routes[$uri]);
} else {
  die("WHAT");
}


function newRoute($path)
{
  $projectName = '/gamedot';
  return $projectName . $path;
}
