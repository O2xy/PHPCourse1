<?php
foreach ($images as $image) :
    $imgUrl = "/imgs/{$image}";
?>
    <a href="/photo.php?id=<?=$image['id']?>" target='_blank'>
            <img src="<?=$imgUrl?>" width='200'>
    </a>
<? endforeach;?>

