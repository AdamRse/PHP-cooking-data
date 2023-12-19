<?php
//1
foreach($_GET as $k => $v){
    echo "<p>$v est la valeur de $k</p>";
}

//2
echo (isset($_GET['age']))?"Age bien passé par l'url":"Pas d'age en paramètre";

