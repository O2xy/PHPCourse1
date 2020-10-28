<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "products.php";
$products = getAllProducts();
include VIEWS_DIR . 'catalog.php';
