<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";

function getConnection()
{
    $config = include CONFIG_DIR . 'db.php';
    static $connection = null;
    if (is_null($connection)) {
        $connection = mysqli_connect(
            $config['host'],
            $config['login'],
            $config['password'],
            $config['db']
        );
    }

    return $connection;
}

/** Выполнение запроса без выборки */
function execute(string $sql): int
{
    $result = mysqli_query(getConnection(), $sql);
    return mysqli_affected_rows(getConnection());
}

/** Когда в ответе строго одна строка  */
function queryOne(string $sql)
{
    return queryAll($sql)[0];
}

/** обычный селект */
function queryAll(string $sql)
{
    $result = mysqli_query(getConnection(), $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

