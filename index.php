<?php

$uri = parse_url($_SERVER["REQUEST_URI"])['path'];

// TODO: Still not completed
$routes = [
  newRoute("/") => "src/controllers/user/homepage.php",
  newRoute("/signup") => "src/controllers/user/signup.php",
  newRoute("/signin") => "src/controllers/user/signin.php",
  newRoute("/game") => "src/controllers/user/game_page.php",
  newRoute("/games") => "src/controllers/user/games.php",
  newRoute("/categories") => "src/controllers/user/categories.php",
  newRoute("/checkout") => "src/controllers/user/checkout.php",
  newRoute("/cart") => "src/controllers/user/cart.php",
  newRoute("/contactus") => "src/controllers/common/contactus.php",
  newRoute("/admin_signin") => "src/controllers/admin/signin_admin.php",
  newRoute("/admin_homepage") => "src/controllers/admin/admin_homepage.php",

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
