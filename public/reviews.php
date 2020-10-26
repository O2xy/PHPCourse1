<?php
require_once ENGINE_DIR . "db.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $author = $_POST['author'];
    $text = $_POST['text'];
    $goodID = $_GET['id'];

    $sql = "INSERT INTO reviews(author, text, goodID) VALUES ('{$author}','{$text}','{$goodID}')";
    execute($sql);
}

$goodID = $_GET['id'];
$sql = "SELECT * FROM reviews WHERE goodID = '{$goodID}'";
$reviews = queryAll($sql);

include VIEWS_DIR . "reviews.php";