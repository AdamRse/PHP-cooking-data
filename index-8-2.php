<?php
session_start();
if(!empty($_GET['lastname']) && !empty($_GET['name'])){
    if(!setcookie("exoPHP", $_GET['name'].'+'.$_GET['lastname'])){
        echo "La création du cookie à échouée";
    }
    else{
        header("location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'Partie-8/3.php';
    ?>
</body>
</html>