<?php
$string = file_get_contents("./films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);

$films = $brut["feed"]["entry"];
//print_r($brut["feed"]["entry"][0]["im:name"]["label"]);

function indent($i){
    $retour = "";
    for($j=0;$j<$i;$j++){
        $retour .= "| &nbsp; &nbsp; ";
    }
    return $retour;
}
function vardumpPerso($tableau, $i = 0){
    foreach($tableau as $k => $v){
        if(is_array($v)){
            echo ($i>0)?"<br/>":null;
            echo indent($i)."[<b>\"$k\"</b>]";
            vardumpPerso($v, ++$i);
        }
        else{
            echo "<br/>".indent($i)."[<b>\"$k\"</b>] => $v<br/>".indent($i);
        }
    }
}

vardumpPerso($films);
//var_dump($films)


//trouverFilm($films, "a", "a");
?>
Top 10 : <?php for($i = 0; $i <10; $i++){ echo '<p>'.($i+1).') '.$films[$i]["im:name"]["label"].'</p>'; }  ?>
<p>Classement de gravity : </p>

