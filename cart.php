<?php
session_start();

// Initialize cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle adding products to the cart
if (isset($_GET['action']) && $_GET['action'] == 'add') {
    $productId = $_GET['id'];
    $productName = $_GET['name'];
    $productPrice = $_GET['price'];
    
    // Check if the product is already in the cart
    if (isset($_SESSION['cart'][$productId])) {
        // Increase quantity
        $_SESSION['cart'][$productId]['quantity']++;
    } else {
        // Add new product to cart
        $_SESSION['cart'][$productId] = [
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => 1
        ];
    }
}

// Handle removing products from the cart
if (isset($_GET['action']) && $_GET['action'] == 'remove') {
    $productId = $_GET['id'];
    unset($_SESSION['cart'][$productId]);
}

// Calculate total price
$totalPrice = 0;
foreach ($_SESSION['cart'] as $item) {
    $totalPrice += $item['price'] * $item['quantity'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>
    <header>
        <h1>Your Cart</h1>
    </header>
    
    <section class="cart">
        <?php if (empty($_SESSION['cart'])): ?>
            <p>Your cart is empty.</p>
        <?php else: ?>
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['name']); ?></td>
                        <td><?php echo $item['quantity']; ?></td>
                        <td>Rp. <?php echo number_format($item['price'], 2, ',', '.'); ?></td>
                        <td>Rp. <?php echo number_format($item['price'] * $item['quantity'], 2, ',', '.'); ?></td>
                        <td><a href="cart.php?action=remove&id=<?php echo $id; ?>">Remove</a></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3"><strong>Total Price:</strong></td>
                    <td>Rp. <?php echo number_format($totalPrice, 2, ',', '.'); ?></td>
                    <td></td>
                </tr>
            </table>
            <a href="checkout.php" class="btn">Proceed to Payment</a>
        <?php endif; ?>
    </section>
</body>
</html>