<?php
function nullCheck($exp) {
    if (is_null($exp)) {
        return 'некорректное выражение';
    }
    return $exp;
}
?>
<form action="" method="get" enctype="multipart/form-data">
    <input type="text" name="first"><br>
    <input type="radio" id="addition" name="sign" value="addition" checked>
    <label for="addition"> + </label><br>
    <input type="radio" id="subtraction" name="sign" value="subtraction">
    <label for="subtraction"> - </label><br>
    <input type="radio" id="multiplication" name="sign" value="multiplication">
    <label for="multiplication"> * </label><br>
    <input type="radio" id="division" name="sign" value="division">
    <label for="division"> / </label><br>
    <input type="text" name="second">
    <br><br>
    <input type="submit" value="посчитать">
</form>

<input type="text" value="<?= nullCheck($c) ?>">
