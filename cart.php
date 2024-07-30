<?php
session_start();

// Para poder inicializar el carrito si este no existe
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Para poder agregar paquete al carrito
if (isset($_POST['add_to_cart'])) {
    $package_id = $_POST['package_id'];
    $package_name = $_POST['package_name'];
    $package_price = $_POST['package_price'];

    // Para verificar si el paquete ya se encuentra en el carrito
    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $package_id) {
            $item['quantity']++;
            $found = true;
            break;
        }
    }
    if (!$found) {
        $_SESSION['cart'][] = [
            'id' => $package_id,
            'name' => $package_name,
            'price' => $package_price,
            'quantity' => 1
        ];
    }
}

// Mostrar contenido del carrito
if (!empty($_SESSION['cart'])) {
    echo '<table>';
    echo '<tr><th>Paquete</th><th>Precio</th><th>Cantidad</th><th>Total</th></tr>';
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $subtotal = $item['price'] * $item['quantity'];
        echo '<tr>';
        echo '<td>' . htmlspecialchars($item['name']) . '</td>';
        echo '<td>$' . number_format($item['price'], 2) . '</td>';
        echo '<td>' . $item['quantity'] . '</td>';
        echo '<td>$' . number_format($subtotal, 2) . '</td>';
        echo '</tr>';
        $total += $subtotal;
    }
    echo '<tr><td colspan="3">Total</td><td>$' . number_format($total, 2) . '</td></tr>';
    echo '</table>';
} else {
    echo '<p>Tu carrito está vacío.</p>';
}

// Para la opción de vaciar el carrito
if (!empty($_SESSION['cart'])) {
    echo '<form action="cart.php" method="post">';
    echo '<button type="submit" name="clear_cart">Vaciar Carrito</button>';
    echo '</form>';
}

// Para poder vaciar el carrito
if (isset($_POST['clear_cart'])) {
    $_SESSION['cart'] = [];
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>
