<?php
$routes = [
  newRoute("/") => __DIR__ . "/src/user/controllers/homepage.php",
  newRoute("/signup") => "src/user/controllers/signup.php",
  newRoute("/signin") => "src/user/controllers/signin.php",
  newRoute("/game") => "src/user/controllers/game_page.php",
  newRoute("/games") => "src/user/controllers/games.php",
  newRoute("/categories") => "src/user/controllers/categories.php",
  newRoute("/checkout") => "src/user/controllers/checkout.php",
  newRoute("/cart") => "src/user/controllers/cart.php",
  newRoute("/contactus") => "src/common/controllers/contactus.php",
  newRoute("/admin/signin") => "src/admin/main/controllers/signin_admin.php",
  newRoute("/admin/") => "src/admin/main/controllers/index.php",
  newRoute("/admin/games/") => "src/admin/games/controllers/games.php",
  newRoute("/admin/games/{game}") => "src/admin/games/controllers/game.php",
  newRoute("/admin/games/add") => "src/admin/games/controllers/add_game.php",
  newRoute("/admin/games/edit") => "src/admin/games/controllers/edit_game.php",
  newRoute("/admin/users/") => "src/admin/users/controllers/users.php",
  newRoute("/admin/users/user") => "src/admin/users/controllers/user.php",
];

function newRoute($path)
{
  $projectName = '/gamedot';
  return $projectName . $path;
}
