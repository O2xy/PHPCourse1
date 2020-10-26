
<?php
//require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
$host = '127.0.0.1';
$login = 'root';
$password = 'root';
$db = 'phpicters';


function gallery2db(array $arr, $host, $login, $password, $db){
    $connection = mysqli_connect($host, $login, $password, $db);
    echo "Информация о сервере: " . mysqli_get_host_info($connection) . PHP_EOL;
    foreach ($arr as $img) {
        $sql = "INSERT INTO pictures (name, path) VALUES ('{$img['name']}', '{$img['path']}')";
        $res = mysqli_query($connection, $sql);

    }
}

function getGallery($host, $login, $password, $db) {
    $connection = mysqli_connect($host, $login, $password, $db);
    $sql = "SELECT * FROM pictures";
    $res = mysqli_query($connection, $sql);
    $arr =[];
    if($res)
    {
        $rows = mysqli_num_rows($res); // количество полученных строк

        for ($i = 0 ; $i < $rows ; ++$i)
        {
            $row = mysqli_fetch_row($res);
            array_push($arr,[
                'id' => $row[0],
                'name' => $row[1],
                'path' => $row[2],
                'views' => $row[3]
            ]);
        }

        mysqli_free_result($res);
        return $arr;
    }
}

function getPhotobyID ($id, $host, $login, $password, $db){
    $connection = mysqli_connect($host, $login, $password, $db);
    $sql = "SELECT * FROM pictures WHERE id ='{$id}'";
    $res = mysqli_query($connection, $sql);
    $image = mysqli_fetch_row($res);

    $sql ="UPDATE pictures SET `views` = `views` + 1 WHERE id ='{$id}'";
    $res = mysqli_query($connection, $sql);
    return $image;
}