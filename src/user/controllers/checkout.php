<?php
$title = 'Checkout';

// Database connection
$database = new Database();

// Get the user ID
$user_id = $_SESSION['user']['id'];

// Get the cart items
$query = '
SELECT 
    cart_items.id,
    games.id AS game_id,
    games.price,
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

// Check if the cart is empty
if (!$cartItems) {
  $_SESSION["cartErrors"][] = 'Cart is empty';
  header("Location: /gamedot/cart");
  exit;
}

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


// Check if the total price is less than 0 or the total quantity is less than 1
if ($totalPrice < 0 || $totalQuantity < 1) {
  $_SESSION["cartErrors"][] = 'Total price must be at least 0 and total quantity must be at least 1';
  header("Location: /gamedot/cart");
  exit;
}

// Post request
// Handle the post request to purchase the games and create an order
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check card information
  if (empty($_POST['name']) || empty($_POST['card_number']) || empty($_POST['expiry_date']) || empty($_POST['cvv'])) {
    $_SESSION["checkOutErrors"][] = 'Please fill in all the fields';
    header("Location: /gamedot/checkout");
    exit;
  }

  if (isset($_POST['purchase_form'])) {

    try {
      // Start a transaction
      $database->beginTransaction();

      // Create an order 
      $query = 'INSERT INTO orders (user_id, total_price, payment_method) VALUES (:user_id, :total_price, :payment_method)';
      $database->query($query, ['user_id' => $user_id, 'total_price' => $totalPrice, 'payment_method' => 'Credit Card']);

      // Get the order ID
      $order_id = $database->getLastInsertId();

      // Create an array to store order items
      $orderItems = [];

      // Calculate subtotal for each cart item and store in order items array
      foreach ($cartItems as $cartItem) {
        // Loop through the quantity of each item

        $quantity = (int)$cartItem['quantity'];

        // Get game codes from stock
        $query = 'SELECT id, game_code FROM stock WHERE game_id = :game_id LIMIT ' . $quantity;
        $stock = $database->query($query, ['game_id' => $cartItem['game_id']])->qAll();

        // Check if there are enough stock codes
        if (count($stock) < $quantity) {
          $_SESSION["cartErrors"][] = 'Not enough stock';
          header("Location: /gamedot/cart");
          exit;
        }

        for ($i = 0; $i < $quantity; $i++) {
          // Calculate the subtotal for the current item
          $subtotal = $cartItem['price'];

          // Add the subtotal to the current item
          $orderItems[] = [
            'order_id' => $order_id,
            'game_id' => $cartItem['game_id'],
            'subtotal' => $subtotal,
            'game_code' => $stock[$i]['game_code']
          ];

          // Remove the used stock code from the stock table
          $deleteQuery = 'DELETE FROM stock WHERE id = :stock_id';
          $database->query($deleteQuery, ['stock_id' => $stock[$i]['id']]);
        }
      }

      // Insert the order items
      $query = 'INSERT INTO order_items (order_id, game_id, game_code, subtotal) VALUES (:order_id, :game_id, :game_code, :subtotal)';

      foreach ($orderItems as $orderItem) {
        $database->query($query, $orderItem);
      }

      // Clear the cart
      $query = 'DELETE FROM cart_items WHERE cart_id IN (SELECT id FROM carts WHERE user_id = :user_id)';
      $database->query($query, ['user_id' => $user_id]);

      // Commit the transaction if all queries succeed
      $database->commit();

      // Success message
      $_SESSION["successPurchase"] = 'Purchase successful you can view your order and get the game codes from the order page.';

      // Redirect to the orders page
      header("Location: /gamedot/orders/$order_id");
      exit;
    } catch (Exception $e) {
      // Rollback the transaction if any query fails
      $database->rollBack();

      // Handle the error
      $_SESSION["cartErrors"][] = 'An error occurred during the purchase process. Please try again later.';
      header("Location: /gamedot/cart");
      exit;
    }
  }
}

require('src/user/views/checkout.view.php');
