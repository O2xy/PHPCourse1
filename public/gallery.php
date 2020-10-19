<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<body class="container">
<?php
$galleryDir = $_SERVER['DOCUMENT_ROOT'] . "/imgs/"; //Нам надо получить полный путь для scandir
$galleryArr = scandir($galleryDir);
$a = array_shift($galleryArr);$a = array_shift($galleryArr); //Убираем из массива текущую и родительскую директории

foreach ($galleryArr as $key => $file) {
    $galleryArr[$key] = $galleryDir . $galleryArr[$key];
    $galleryArr[$key] = str_replace('w:/domains/phpcourse1/public', '', $galleryArr[$key]); // откидываем начало пути, т.к. img не поймёт пути из php
}

foreach ($galleryArr as $file) { //можно было объединить в один цикл, но мне показалось лучше вынести отрисовку в отдельный цикл
    $imgStr = '<a href="' . $file . '" target="_blank"> <img src="' . $file . '" class="col-3"> </a>';
    echo $imgStr;
}
?>
</body>