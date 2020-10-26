<?php
function files2array (array $arr):array {
    $outArr = [];
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';

    foreach ($arr as $path){
        array_push($outArr,
            [
                'name' => substr(str_shuffle($permitted_chars), 0, 16),  //генерируем случайное имя
                'path' => "/imgs/" . $path
            ]
        );
    }
    return $outArr;
}

function arrSort (array $arr): array {
    function cmp($a, $b)
    {
        if ($a['views'] == $b['views']) {
            return 0;
        }
        return ($a['views'] < $b['views']) ? 1 : -1;
    }
    usort($arr, "cmp");
    return $arr;

}