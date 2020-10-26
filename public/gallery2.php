<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "draw.php";
require_once ENGINE_DIR . "files.php";
require_once ENGINE_DIR . "gallerydb.php";
require_once ENGINE_DIR . "arrayfunctions.php";

$host = '127.0.0.1';
$login = 'root';
$password = 'root';
$db = 'phpicters';


$images = getFiles(IMG_DIR);

//$namedImgs = files2array($images);  // создадим массив с названиями картинок и путям к ним
//gallery2db($namedImgs, $host, $login, $password, $db); // внесём массив в БД

$namedImgs = getGallery($host, $login, $password, $db); // получаем массив из БД
$namedImgs = arrSort($namedImgs);

include VIEWS_DIR . "gallery.php";
