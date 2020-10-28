<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "products.php";

$id = get('id');
$product = getProductById($id);
$product['images'] = getProductImages($id);
include VIEWS_DIR . 'product.php';