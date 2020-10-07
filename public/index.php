<?php

// задание 2

    echo "Hello, World!";
    echo '<br><br>';

    $name = "GeekBrains user";
    echo "Hello, $name!";
    echo '<br><br>';

    define ( 'MY_CONST' , 100 );
    echo MY_CONST;
    echo '<br><br>';

    $int10 = 42;
    $int2 = 0b101010;
    $int8 = 052;
    $int16 = 0x2A;
    echo "Десятеричная система $int10 <br>";
    echo "Двоичная система $int2 <br>";
    echo "Восьмеричная система $int8 <br>";
    echo "Шестнадцатеричная система $int16 <br>";
    echo '<br>';

    $precise1 = 1.5;
    $precise2 = 1.5e4;
    $precise3 = 6E-8;
    echo "$precise1 | $precise2 | $precise3";
    echo '<br><br>';

    $a = 1;
    echo "$a";
    echo '$a';
    echo '<br><br>';

    $a = 10;
    $b = ( boolean ) $b;
    
    $a = 'Hello,';
    $b = 'world';
    $c = $a . $b;
    echo $c;
    echo '<br><br>';

    $a = 4;
    $b = 5;
    echo $a + $b . '<br>' ; // сложение
    echo $a * $b . '<br>' ; // умножение
    echo $a - $b . '<br>' ; // вычитание
    echo $a / $b . '<br>' ; // деление
    echo $a % $b . '<br>' ; // остаток от деления
    echo $a ** $b . '<br>' ; // возведение в степень
    echo '<br>';

    $a = 4;
    $b = 5;
    $a += $b;
    echo 'a = ' . $a;
    $a = 0;
    echo $a ++; // Постинкремент
    echo ++ $a ; // Преинкремент
    echo $a --; // Постдекремент
    echo -- $a ; // Предекремент
    echo '<br><br>';

    $a = 4;
    $b = 5;
    var_dump ( $a == $b ); // Сравнение по значению
    var_dump ( $a === $b ); // Сравнение по значению и типу
    var_dump ( $a > $b ); // Больше
    var_dump ( $a < $b ); // Меньше
    var_dump ( $a <> $b ); // Не равно
    var_dump ( $a != $b ); // Не равно
    var_dump ( $a !== $b ); // Не равно без приведения типов
    var_dump ( $a <= $b ); // Меньше или равно
    var_dump ( $a >= $b ); // Больше или равно
    echo '<br><br>';

// задание 3

    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true?
    echo "Выполняется сравнение по значению, при котором выполняется неявное преобразование строки к int и 5 = 5 <br>";
    var_dump((int)'012345');     // Почему 12345?
    echo "Выполняется явное преобразование строки к типу int, в числах отображение нулей до целой части не принято  <br>";
    var_dump((float)123.0 === (int)123.0); // Почему false?
    echo "Выполняется сравнение по значению и типу, и тип не совпадает <br>";
    var_dump((int)0 === (int)'hello, world'); // Почему true?
    echo "Выполняется сравнение по значению и типу, тип совпадает, а при преобразовании строки в ней не встречается ни одного числа, таким образом получается, что её числовое значение равняется 0, 0 = 0 <br>";

// задание 5

$a = 1;
$b = 2;
echo "a = $a b = $b <br>";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "b = $b a = $a <br>";

?>
