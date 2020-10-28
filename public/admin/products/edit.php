<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "products.php";

//$product['images'] = getProductImages($id);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = post('product');
    if (isset($product['id'])) {
        $id = $product['id'];
        unset($product['id']);
        updateProduct($id, $product);
    }else {
        createProduct($product);
    }
    redirect($_SERVER['REQUEST_URI']);
}

$product = null;
if ($id = get('id')){
    $product = getProductById($id);
}

include VIEWS_DIR . 'admin/products/edit.php';