<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "draw.php";
require_once ENGINE_DIR . "files.php";
require_once ENGINE_DIR . "gallerydb.php";
require_once ENGINE_DIR . "arrayfunctions.php";
require_once ENGINE_DIR . "db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM goods WHERE (id='{$id}')";
$item = queryOne($sql);

include VIEWS_DIR . "item.php";
include "reviews.php";