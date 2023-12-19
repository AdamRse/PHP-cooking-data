<?php
session_start();
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
    if(empty($_GET['lastname'])){
        if(empty($_SESSION['ln'])){
            ?>
            <p>Aucun lastname reçu.</p>
            <?php
        }
        else{
            ?>
            <p>Last name : <b><?php echo $_SESSION['ln'];  ?></b></p>
            <?php
        }
    }
    else{
        $_SESSION['ln']=$_GET['lastname'];
        ?>
        <p><?php echo $_GET['lastname'] ?> enregistré !</p>
        <?php
    }
    ?>
    <a href="./../index.php">Retour à la première page</a>
</body>
</html>
