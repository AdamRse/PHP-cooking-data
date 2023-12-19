<?php
if(!empty($_COOKIE['exoPHP'])){
    $split=explode("+", $_COOKIE['exoPHP'], 2);
    ?>
    <p>Bonjour <?php echo $split[0].' '.$split[1] ?> Vous avez été identifié par cookie</p>
    <?php
}
?>

<form action="./" method="get">
    <input type="text" name="name">
    <input type="text" name="lastname">
    <input type="submit" value="S'enregistrer en cookie">
</form>

<a href="./">Actualiser</a>