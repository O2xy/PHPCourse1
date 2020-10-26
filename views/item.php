<?php
$sql = "SELECT path FROM pictures WHERE (goodID='{$item['id']}')";
$imgUrl = queryOne($sql)['path'];
?>


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
