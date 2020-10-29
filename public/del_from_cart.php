<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "base.php";

$id = get('id');
session_start();
$cart = $_SESSION['cart'];

for ($i = 0; $i < count($cart); $i++) {
    if ($cart[$i]['id'] == $id) {
        if ($cart[$i]['amount'] > 1){
            $cart[$i]['amount']--;
            break;
        } else {
            unset($cart[$i]);
        }
    }
}

$_SESSION['cart'] = $cart;
redirect('/cart.php');