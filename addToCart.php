<?php
    session_start();
    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
        unset($_SESSION['cart']);
        $newElement = $_POST['pet_id'];
        array_push($cart, "$newElement");
        $_SESSION['cart'] = $cart;
    } else {
        $_SESSION['cart'] = array($_POST['pet_id']);
    }
    echo json_encode($_SESSION['cart']);
?>