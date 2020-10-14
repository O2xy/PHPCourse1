<?php
//mb_internal_encoding("UTF-8");
header('Content-Type: text/html; charset=utf-8');

//Первое задание

$i = 0;
while ($i <= 100) {
    if ($i % 3 == 0) {
        echo "$i ";
    }
    $i++;
}


//Второе задание
$i =0;
echo "<br><br>";
do {
    if ($i % 2 == 0) {
        echo "$i - чётное число <br>";
    } else {
        echo "$i - нечётное число <br>";
    }
    $i++; }
while ($i <= 10);

//третье задание
echo "<br><br>"; 
$states = [
    'Московская' => ['Зеленоград', 'Клин', 'Волоколамск'],
    'Ленинградская' => ['Всеволожск','Павловск','Приозерск','Тихвин', 'Кировск', 'Кингисепп'],
    'Рязанская' => ['Рязань','Касимов','Ряжск','Шацк']
];

foreach ($states as $key => $value) {
    echo "<br> $key: <br>";
    foreach($states[$key] as $valueCity){
        echo "$valueCity, ";
    }
};

//четвёртое задание
function transliteration(string $str): string {
    // для траслитерации Ь и Ъ нужны, для генерации URL по идее их надо просто выпускать
    $translitArr = [
        'а' => 'a',     'б' => 'b',     'в' => 'v',
        'г' => 'g',     'д' => 'd',     'е' => 'e',
        'ё' => 'yo',    'ж' => 'zh',    'з' => 'z',
        'и' => 'i',     'й' => 'y',     'к' => 'k',
        'л' => 'l',     'м' => 'm',     'н' => 'n',
        'о' => 'o',     'п' => 'p',     'р' => 'r',
        'с' => 's',     'т' => 't',     'у' => 'u',
        'ф' => 'f',     'х' => 'h',     'ц' => 'c',
        'ч' => 'ch',    'ш' => 'sh',    'щ' => 'shch',
        'ъ' => '″',     'ы' => 'y',     'ь' => "'",
        'э' => 'e',     'ю' => 'yu',    'я' => 'ya',
        ' ' => ' ',     ',' => ',',     '.' => '.'
    ];
    $strArr = mb_str_split($str, 1);
    $exitArr = [];
    foreach ($strArr as $value){
        array_push($exitArr, $translitArr[$value]);
    }
    $str = implode($exitArr);
    return $str;
}
echo'<br><br>';
echo transliteration('съешь ещё этих мягких французских булок, да выпей чаю');

//пятое задание
function space2Underscore(string $inStr): string {
    return str_replace(' ', '_', $inStr);
}

echo'<br><br>';
echo space2Underscore('съешь ещё этих мягких французских булок, да выпей чаю');

//шестое задание
$brotherhood = ['Фродо Бэггинс — главный хранитель кольца',
                'Сэмуайз Гэмджи — его слуга, садовник',
                'Перегрин Тук и Мериадок Брендибак — родственники Фродо и его спутники',
                'Гэндальф Серый — член Белого совета, маг-Истари',
                'Гимли, сын Глоина — гном из Эребора',
                'Леголас, сын Трандуила — эльфийский принц из Лихолесья',
                'Арагорн, сын Араторна — наследник Исилдура и королевского престола Арнора и Гондора',
                'Боромир, сын Дэнетора — военачальник Гондора'];
echo'<br><br>';
?>

<ul>
    <?php foreach ($brotherhood as $item) { ?>
        <li>
            <?php echo $item ?>
        </li>
    <?php } ?>
</ul>

<?php

$brotherhood2 = [
    ['Фродо Бэггинс — главный хранитель кольца','Сэмуайз Гэмджи — его слуга, садовник','Перегрин Тук и Мериадок Брендибак — родственники Фродо и его спутники'],
    'Гэндальф Серый — член Белого совета, маг-Истари',
    'Гимли, сын Глоина — гном из Эребора',
    'Леголас, сын Трандуила — эльфийский принц из Лихолесья',
    ['Арагорн, сын Араторна — наследник Исилдура и королевского престола Арнора и Гондора','Боромир, сын Дэнетора — военачальник Гондора']
    ];

function liGenerate($arr) {
    foreach ($arr as $item) {
        echo '<li>';
        if (is_string($item)) {
            echo $item;
        }elseif (is_array($item)){
            echo 'название раздела, которое я поленился придумывать в массив';
            echo '<ul>';
            liGenerate($item);
            echo '</ul>';
        }
        echo '</li>';
    }
}

echo'<br><br>';
?>
<ul>
    <?php
        liGenerate($brotherhood2);
    ?>
</ul>


<?php
//седьмое задание

echo'<br><br>';
function incEcho(int $num): int{
    echo "$num, ";
    return ++$num;
}
for ($i = 0; $i <= 9; $i = incEcho($i)){
    // здесь пусто
    }

//восьмое задание

echo'<br><br>';
foreach ($states as $key => $value) {
    echo "<br> $key: <br>";
    foreach($states[$key] as $valueCity){
        $strArr = mb_str_split($valueCity, 1);
        if ($strArr[0] == 'К') {
            echo "$valueCity, ";
        }
    }
};

//девятое задание

function urlGenerator (string $str): string {
    return space2Underscore(transliteration($str));
}
echo'<br><br>';
echo urlGenerator('съешь ещё этих мягких французских булок, да выпей чаю');

?>