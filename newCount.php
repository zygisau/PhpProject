<?php
session_start();
$newValue = $_POST['newValue']; //3
$pet_id = $_POST['pet_id'];
$cart = $_SESSION['cart'];
$count = 0;
print_r($cart);
foreach ($cart as $key => $value) {
    if ($value == $pet_id) {
        $count++;
    }
}
$diff = $newValue - $count;
//$new = $diff + $count;
if ($diff<0) {
    echo "if";
    foreach ($cart as $key => $value) {
        if ($value == $pet_id) {
            if ($diff < 0) {
                array_splice($cart, $key, 1);
                $diff++;
            }
        }
    }
} else {
    echo "else";
    for($id = 1; $id<=$diff; $id++) {
        $cart[] = $pet_id;
    }
}
unset($_SESSION['cart']);
sort($cart);
$_SESSION['cart'] = $cart;
print_r($cart);
?>