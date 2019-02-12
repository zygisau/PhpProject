<?php
session_start();
$cart = $_SESSION['cart'];
print_r($cart);
for ($i = 0; $i < count($cart); $i++) {
//foreach ($cart as $key => $value) {
    if ($cart[$i] == $_POST['pet_id']) {
        array_splice($cart, $i, 1);
        break;
    }
    print_r($cart);
}
unset($_SESSION['cart']);
$_SESSION['cart'] = $cart;
?>