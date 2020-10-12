<?php

// Задание 1

$a = -10;
$b = 50;

if (($a >= 0)&&($b >= 0)) {
    echo $a - $b;
} elseif (($a < 0)&&($b < 0)) {
    echo $a * $b;
} elseif (($a * $b) <= 0) {
    echo $a + $b;
}

// Задание 3

function addition(int $a, int $b): int {
    return $a + $b;
}

function subtraction(int $a, int $b): int {
    return $a - $b;
}

function multiplication(int $a, int $b): int {
    return $a * $b;
}

function division(int $a, int $b): float {
    return $a / $b;
}

//Задание 4

function mathOperation(int $arg1, int $arg2, $operation) {
    $result = null;
    switch ($operation) {
        case '+':
            $result = addition($arg1, $arg2);
            break;
        case '-':
            $result = subtraction($arg1, $arg2);
            break;
        case '*':
            $result = multiplication($arg1, $arg2);
            break;
        case '/':
            $result = division($arg1, $arg2);
            break;
        default:
            $result = null;
    }
    if (is_null($result)) {
        echo 'Вы ввели неправильный символ операции';
        return null;
    } else {
        return $result;
    }
}
echo "<br><br>";
echo mathOperation(2, 3, '+') . "<br>";
echo mathOperation(9,4,'-') . "<br>";
echo mathOperation(3,4,'*') . "<br>";
echo mathOperation(9,4,'/') . "<br>";

// Задание 5

echo "<br>";
echo date("Y");
echo "<br>";

// Задание 6

function power($val, int $pow) {
    if ($pow < 0) {
        return null;
    }
    if ($pow < 1) {
        return 1;
    }
    return $val * power($val, ($pow - 1));
}

echo "<br>";
echo power(10, 10);
echo "<br>";

// Задание 7

function declination (int $num): int {
    $firstType = [1, 21, 31, 41, 51];
    $secondType = [2, 3, 4, 22, 23, 24, 32, 33, 34, 42, 43, 44, 52, 53, 54];
    if (in_array($num, $firstType)) {
        return 1;
    }
    if (in_array($num, $secondType)) {
        return 2;
    }
    return  3;
}

function hourDeclination (int $hour): string {
    $dec = declination($hour);
    if ($dec == 1) {
        return ($hour . " час");
    }
    if ($dec == 2) {
        return ($hour . " часа");
    }
    if ($dec == 3) {
        return ($hour . " часов");
    }
    return ("произошло нечто невообразимое");
}

function minDeclination (int $min): string {
    $dec = declination($min);
    if ($dec == 1) {
        return ($min . " минута");
    }
    if ($dec == 2) {
        return ($min . " минуты");
    }
    if ($dec == 3) {
        return ($min . " минут");
    }
    return ("произошло нечто невообразимое");
}

function printDate(){
    echo hourDeclination(date('h')) . " " . minDeclination(date('i'));
    // echo hourDeclination(12) . " " . minDeclination(32); // строка для тестирования
}

echo "<br>";
printDate();

?>