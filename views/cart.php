<?php


?>
<table>
    <tr>
        <td>Изображение</td>
        <td>Наименование</td>
        <td>Цена</td>
        <td>Количество</td>
        <td>Стоимость</td>
    </tr>

    <?php foreach($cart as $item) :
        $sql = "SELECT path FROM pictures WHERE (goodID='{$item['id']}')";
        $imgUrl= queryOne($sql)['path'];

        $sql = "SELECT * FROM goods WHERE (id='{$item['id']}')";
        $str = queryOne($sql);

        $name = $str['name'];
        $price = $str['price'];
        ?>
        <tr>
            <td><img src="<?=$imgUrl?>" alt="<?=$item['name']?>" width='50'></td>
            <td> <?=$name?></td>
            <td> <?=$price?></td>
            <td> <?=$item['amount']?></td>
            <td> <?=$item['amount'] * $price?></td>
            <td> <a href="/del_from_cart.php?id=<?=$item['id']?>"> удалить </a></td>
        </tr>
    <? endforeach;?>

</table>