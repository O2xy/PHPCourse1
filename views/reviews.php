<?php
foreach ($reviews as $review) :
?>
    <p><?=$review['text']?> </p>
    <p><?=$review['author']?></p>
    <p><?=$review['date']?></p>
    <br>

<? endforeach;?>


<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="text" placeholder="Текст отзыва"><br>
    <input type="text" name="author" placeholder="Имя"><br>
    <input type="submit" value="отправить">
</form>