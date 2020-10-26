<?php
function addition(int $a, int $b): int {
    return $a + $b;
}

function subtraction(int $a, int $b): int {
    return $a - $b;
}

function multiplication(int $a, int $b): int {
    return $a * $b;
}

function division(int $a, int $b): ?float {
    if ($b != 0) {
        return $a / $b;
    }
    return null;
}

//Задание 4

function mathOperation($arg1, $arg2, $operation) {
    $result = null;
    if (is_numeric($arg1) && is_numeric($arg2)) {
        switch ($operation) {
            case 'addition':
                $result = addition($arg1, $arg2);
                break;
            case 'subtraction':
                $result = subtraction($arg1, $arg2);
                break;
            case 'multiplication':
                $result = multiplication($arg1, $arg2);
                break;
            case 'division':
                $result = division($arg1, $arg2);
                break;
            default:
                $result = null;
        }
    }
    if (is_null($result)) {
        //echo 'Вы ввели неправильный символ операции';
        return null;
    } else {
        return $result;
    }
}