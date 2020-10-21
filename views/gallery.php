<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<body class="row">
<?php

foreach ($namedImgs as $image) :
    $imgUrl = "{$image['path']}";
?>

    <a href="/photo.php?id=<?=$image['id']?>" target='_blank'>
            <img src="<?=$imgUrl?>" alt="<?=$image['name']?>" width='200'>
        <p>
            Название картинки: <?=$image['name']?> <br>
            ID картинки в базе: <?=$image['id']?> <br>
            Количество просмотров: <?=$image['views']?>
        </p>
    </a>
<? endforeach;?>
</body>
