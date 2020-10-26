<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "math.php";


if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $a = $_GET['first'];
    $b = $_GET['second'];
    $op = $_GET['sign'];
    $c = mathOperation($a, $b, $op);
}


include VIEWS_DIR . "calc.php";