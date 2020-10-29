<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "base.php";

$id = get('id');
session_start();

$cart =[];
$flag = true;
if (isset($_SESSION)) {
    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]['id'] == $id) {
                $cart[$i]['amount']++;
                $flag = false;
                break;
            }
        }
        if ($flag) {
            $cart[] =  [
                    'id' => $id,
                    'amount' => 1
                ];
        }
    } else {
        $cart[0] = [
                'id' => $id,
                'amount' => 1
            ];
    }
}
$_SESSION['cart'] = $cart;
redirect('/catalog.php');