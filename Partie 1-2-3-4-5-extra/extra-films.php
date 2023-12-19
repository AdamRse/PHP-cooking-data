<?php
$string = file_get_contents("./films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);

$films = $brut["feed"]["entry"];
//print_r($brut["feed"]["entry"][0]["im:name"]["label"]);

function indent($i){
    $retour = "";
    for($j=0;$j<$i;$j++){
        $retour .= ". &nbsp; &nbsp; &nbsp; ";
    }
    return $retour;
}
function vardumpPerso($variable, $i = 0){
    if(is_array($variable)){
        foreach($variable as $k => $v){
            if(is_array($v)){
                echo ($i>0)?"<br/>":null;
                echo indent($i)."[<b>\"$k\"</b>]";
                vardumpPerso($v, ($i+1));
            }
            else{
                echo "<br/>".indent($i)."[<b>\"$k\"</b>] => (".gettype($v).") $v<br/>".indent($i);
            }
        }
    }
    else{
        echo gettype($v)." $v";
    }
}
// function trouverValeur($tableau, $valeur, $index = array()){
//     $valeur = strtolower($valeur);
//     $retour = array();
//     if(is_array($tableau)){
//         foreach($tableau as $k => $v){
//             if(empty($retour)){
//                 //var_dump($index);
//                 if(is_array($v)){
//                     $index[]=$k;
//                     trouverValeur($v, $valeur, $index);
//                 }
//                 else{
//                     if($valeur==strtolower($v)){
//                         $index[]=$k;
//                         $retour=$index;
//                         //var_dump($retour);
//                     }
//                     else{
//                         $index = array();
//                     }
//                 }
//             }
//         }
//     }
//     return $retour;
// }
function trouverValeur($films, $valeur, $offset = array(), &$match = false){
    foreach($films as $k => $v){
        if(!$match){
            if(is_array($v)){
                $offset[]=$k;
                trouverValeur($v, $valeur, $offset, $match);
            }
            else{
                if(strtolower($v) == strtolower($valeur)){
                    $offset[]=$k;
                    $match = $offset;
                }
            }
        }
    }
    return $match;
}
//trouverFilm($films, "a", "a");
?>
Top 10 : <?php for($i = 0; $i <10; $i++){ echo '<p>'.($i+1).') '.$films[$i]["im:name"]["label"].'</p>'; }  ?>
<p>Classement de gravity : <?php echo ++trouverValeur($films, "gravity")[0] ?></p>


<?php

vardumpPerso($films);
