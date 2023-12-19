<?php
function traduire($v){
    $v=strtolower($v);
    $r = "";
    switch($v){
        case "monday"; $r="lundi"; break;
        case "tuesday"; $r="mardi"; break;
        case "wednesday"; $r="mercredi"; break;
        case "thursday"; $r="jeudi"; break;
        case "friday"; $r="vendredi"; break;
        case "saturday"; $r="samedi"; break;
        case "sunday"; $r="dimanche"; break;


        case "january"; $r="janvier"; break;
        case "february"; $r="fevrier"; break;
        case "march"; $r="mars"; break;
        case "april"; $r="avril"; break;
        case "may"; $r="mai"; break;
        case "june"; $r="juin"; break;
        case "july"; $r="juillet"; break;
        case "august"; $r="aout"; break;
        case "september"; $r="septembre"; break;
        case "october"; $r="octobre"; break;
        case "november"; $r="novembre"; break;
        case "december"; $r="decembre"; break;

        return $r;
    }
}
//1
echo "<p>".date("d/m/Y", time())."</p>";
//2
echo "<p>".date("d-m-y", time())."</p>";
//3
echo "<p>".date("l F Y", time())."</p>";
//4
echo "<p>".date("U", time())."</p>";
//5
echo "<p>".date("U", time())."</p>";