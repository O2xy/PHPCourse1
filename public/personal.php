<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/main.php";
require_once ENGINE_DIR . "db.php";
$id = get('id');
$sql = "SELECT * FROM users WHERE id ='{$id}'";
$user = queryOne($sql);

?>
Приветствую Вас, <?= $user['name']?>
