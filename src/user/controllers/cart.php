<?php




// User must be signed in
if (!isset($_SESSION['user'])) {
    header('Location: ./signin');
    exit;
}

$user_id = $_SESSION['user']['id'];

$title = 'Cart';
// Database connection
$database = new Database();

// Get the cart items
$query = '
SELECT 
    cart_items.cart_item_id,
    games.name,
    games.main_image_url,
    games.price,
    games.platform,
    cart_items.quantity
FROM
    cart_items
JOIN
    games ON cart_items.game_id = games.id
WHERE
    cart_items.cart_id IN (SELECT cart_id FROM carts WHERE user_id = :user_id)
';
// $cartItems = $database->query($query, ['user_id' => $_SESSION['user']['id']])->qAll();
$cartItems = $database->query($query, ['user_id' => $user_id])->qAll();

// Calculate the subtotal for each item * quantity
foreach ($cartItems as &$cartItem) {
    $cartItem['subtotal'] = $cartItem['price'] * $cartItem['quantity'];
}

// Calculate the total
$totalPrice = array_sum(array_column($cartItems, 'subtotal'));

// Calculate the total quantity
$totalQuantity = array_sum(array_column($cartItems, 'quantity'));


require('src/user/views/cart.view.php');
