<p>User agent : <?php echo $_SERVER['HTTP_USER_AGENT'] ?></p>
<p>IP : <?php echo $_SERVER['REMOTE_ADDR'] ?></p>
<p>Nom serveur : <?php echo $_SERVER['HTTP_HOST'] ?></p>

<?php
if(empty($_SESSION['ln'])){
?>
<form action="./Partie-8/2.php" method="get">
    <input type="text" name="lastname" placeholder="lastname">
</form>
<?php
}
else{
    echo "<p>Lastname <b>".$_SESSION['ln']."</b></p>";
    echo '<a href="./Partie-8/2.php">Aller à la page 2</a>';
}

?>