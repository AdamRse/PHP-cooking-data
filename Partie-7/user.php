<?php
if(!empty($_GET)){
    echo "Bonjour";
    foreach($_GET as $k => $v){
        echo " <b>$v</b>";
    }
}
if(!empty($_POST)){
    echo "Bonjour";
    foreach($_POST as $k => $v){
        echo " <b>$v</b>";
    }
}