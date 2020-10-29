<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<body class="container">
<div class="row">
<?php

foreach ($catalog as $item) :
    $sql = "SELECT path FROM pictures WHERE (goodID='{$item['id']}')";
    $imgUrl = queryOne($sql)['path'];
    ?>
    <div style="border: black solid 2px">
        <a href="/item.php?id=<?=$item['id']?>" target='_blank'>
            <img src="<?=$imgUrl?>" alt="<?=$item['name']?>" width='300'>
            <h3>
                <?=$item['name']?>
            </h3>
            <p>
                <?=$item['description']?>
            </p>
            <p>
                Цена: <?=$item['price']?> руб.
            </p>
        </a>
        <a href="/add2cart.php?id=<?=$item['id']?>" style="color: darkgreen">добавить в корзину</a>
    </div>
<? endforeach;?>
</div>
<a href="/cart.php">перейти в корзину</a>
</body>

