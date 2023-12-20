<form action="./">
    <p>
        <select name="Civilité">
            <option value="">Choisir la civilité</option>
            <option value="Monsieur">Mr</option>
            <option value="Madame">Mme</option>
        </select>
    </p>
    <p><input type="text" name="Nom" <?php echo (empty($_GET['Nom']))?"":'value="'.$_GET['Nom'].'"'; ?>></p>
    <p><input type="text" name="Prénom"></p>
    <p><input type="number" name="Age"></p>
    <p><input type="text" name="Société"></p>
    <input type="submit" value="Valider">
</form>
<?php
if(!empty($_GET)){
    foreach($_GET as $k => $v){
        if(!empty($v))
            echo "<p><b>$k</b> : $v</p>";
    }
}