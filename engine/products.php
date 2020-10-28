<?php
require_once ENGINE_DIR . "db.php";
function getAllProducts()
{
    return queryAll("SELECT * FROM products");
}

function getProductById($id)
{
    return queryOne("SELECT * FROM products WHERE id = {$id}");
}

function getProductImages($id)
{
    return queryAll("SELECT * FROM product_images WHERE product_id = {$id}");
}

function updateProduct(int $id, array $data) {
    if(empty($data)) {
        return null;
    }
    $update_fields = [];
    foreach ($data as $key => $value) {
        $value = is_numeric($value) ?: "'$value'";
        $update_fields[] = "{$key} = {$value}";
    }
    $update_fields = implode(", ", $update_fields);

    $sql = "UPDATE products SET {$update_fields} WHERE id = {$id}";
    return execute($sql);
}

function createProduct(array $data) {
    if(empty($data)) {
        return null;
    }

    $sql = "INSERT INTO products (name, description, price) 
            VALUES ('{$data['name']}', '{$data['description']}', {$data['price']})";

    return execute($sql);
}