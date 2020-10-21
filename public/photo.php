<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "gallerydb.php";

$id = $_GET['id'];
$host = '127.0.0.1';
$login = 'root';
$password = 'root';
$db = 'phpicters';


$image = getPhotobyID ($id, $host, $login, $password, $db);
$imgUrl = "{$image[2]}";
include VIEWS_DIR . "photo.php";
?>

