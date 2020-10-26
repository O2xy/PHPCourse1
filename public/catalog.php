<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "draw.php";
require_once ENGINE_DIR . "files.php";
require_once ENGINE_DIR . "gallerydb.php";
require_once ENGINE_DIR . "arrayfunctions.php";
require_once ENGINE_DIR . "db.php";

$sql = 'SELECT * FROM goods';
$catalog = queryAll($sql);

include VIEWS_DIR . "catalog.php";
