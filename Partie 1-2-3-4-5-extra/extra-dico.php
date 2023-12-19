<?php
function nbTableauFiltre($arr, $char){
    return sizeof(array_filter($arr, function($val) use ($char){
        return str_contains($val, $char);
    }));
}
$string = file_get_contents("dico.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);
?>
    <p>Le tableau contient <?php echo sizeof($dico) ?> mots.</p>
    <p>Le tableau contient <?php echo sizeof(array_filter($dico, function($val){ return strlen($val) == 15; })) ?> mots de 15 caractères</p>
    <p>Le tableau contient <?php echo nbTableauFiltre($dico, "w") ?> mots contenant un "w"</p>
    <p>Le tableau contient <?php echo nbTableauFiltre($dico, "q") ?> mots contenant un "q"</p>