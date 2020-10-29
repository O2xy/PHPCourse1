<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "db.php";
$cart = $_SESSION['cart'];

include VIEWS_DIR . "cart.php";
