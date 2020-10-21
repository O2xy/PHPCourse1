<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "draw.php";
require_once ENGINE_DIR . "files.php";

$images = getFiles(IMG_DIR);

include VIEWS_DIR . "gallery.php";