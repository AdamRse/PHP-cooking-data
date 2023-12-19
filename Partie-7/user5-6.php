<?php
function getExt($nom){
    return strrev(explode(".", strrev($nom), 2)[0]);
}
?>

<p>Civilité : <?php echo $_POST['civilite'] ?></p>
<p>Nom : <?php echo $_POST['nom'] ?></p>
<p>Prénom : <?php echo $_POST['prenom'] ?></p>
<?php

if(!empty($_FILES)){
    //var_dump($_FILES);
    ?>
    <p>Fichier : <b><?php $_FILES["fichier"]["name"] ?></b></p>
    <p>Extension : <?php echo "<b>".getExt($_FILES["fichier"]["name"])."</b> (".$_FILES["fichier"]['type'].")" ?></p>
    <?php
    if($_FILES["fichier"]['type']=="application/pdf"){
        ?>
        <p>C'est un fichier PDF</p>
        <?php
    }
    
}