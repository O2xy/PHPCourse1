<?php /** @var array $product */ ?>
<h1><?=$product['name']?></h1>
<p><?=$product['description']?></p>
<p><?=$product['price']?></p>

<form action="" method="get">
    <input type="text" name="id">
    <input type="submit">
</form>
