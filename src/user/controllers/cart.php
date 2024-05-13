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

// Post request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cart_item_id']) && isset($_POST['quantity'])) {

        $cart_item_id = $_POST['cart_item_id'];
        $quantity = $_POST['quantity'];

        // Convert the inputs to integers
        $cart_item_id = (int)$cart_item_id;
        $quantity = (int)$quantity;


        // Validate the inputs
        if (!is_numeric($cart_item_id) || !is_numeric($quantity)) {
            $_SESSION["cartErrors"][] = 'Invalid input';
            header("Location: /gamedot/cart");
            exit;
        }

        // Check if the cart item exists and belongs to the user
        $query = 'SELECT * FROM cart_items WHERE id = :cart_item_id AND cart_id IN (SELECT id FROM carts WHERE user_id = :user_id)';
        $cartItem = $database->query($query, ['cart_item_id' => $cart_item_id, 'user_id' => $user_id])->q();

        if (!$cartItem) {
            $_SESSION["cartErrors"][] = 'Cart item not found';
            header("Location: /gamedot/cart");
            exit;
        }

        // Check if the quantity is less than 1 remove the item from the cart
        if ($quantity < 1) {
            $query = 'DELETE FROM cart_items WHERE id = :cart_item_id';
            $database->query($query, ['cart_item_id' => $cart_item_id])->q();

            // Show a success message
            $_SESSION["cartUpdateSuccess"] = 'Cart updated successfully';

            // Redirect to the cart page
            header("Location: /gamedot/cart");
            exit;
        }

        // Check if the quantity is greater than 5
        if ($quantity > 5) {
            $_SESSION["cartErrors"][] = 'Quantity cannot be greater than 5';
            header("Location: /gamedot/cart");
            exit;
        }

        // Check if the quantity is greater than the stock
        // Query to get the stock
        $stockQuery = "
        SELECT 
            COUNT(stock.game_id) AS stock
        FROM 
            games
        LEFT JOIN 
            stock ON games.id = stock.game_id
        WHERE 
            games.id = :game_id
        ";
        $stock = $database->query($stockQuery, ['game_id' => $cartItem["game_id"]])->q()['stock'];

        if ($quantity > $stock) {
            $_SESSION["cartErrors"][] = 'Quantity cannot be greater than the stock';
            header("Location: /gamedot/cart");
            exit;
        }

        // Update the quantity of the cart item
        $query = 'UPDATE cart_items SET quantity = :quantity WHERE id = :cart_item_id';
        $database->query($query, ['quantity' => $quantity, 'cart_item_id' => $cart_item_id])->q();

        // Show a success message
        $_SESSION["cartUpdateSuccess"] = 'Cart updated successfully';


        // Redirect to the cart page
        header('Location: ./cart');
        exit;
    }
}

// Get the cart items
$query = '
SELECT 
    cart_items.id,
    games.id AS game_id,
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
    cart_items.cart_id IN (SELECT id FROM carts WHERE user_id = :user_id)
';
// $cartItems = $database->query($query, ['user_id' => $_SESSION['user']['id']])->qAll();
$cartItems = $database->query($query, ['user_id' => $user_id])->qAll();

// Loop through the cartItems array
foreach ($cartItems as $key => $cartItem) {
    // Calculate the subtotal for the current item
    $subtotal = $cartItem['price'] * $cartItem['quantity'];

    // Add the subtotal to the current item
    $cartItems[$key]['subtotal'] = $subtotal;
}

// Calculate the total
$totalPrice = array_sum(array_column($cartItems, 'subtotal'));

// Calculate the total quantity
$totalQuantity = array_sum(array_column($cartItems, 'quantity'));


require('src/user/views/cart.view.php');
