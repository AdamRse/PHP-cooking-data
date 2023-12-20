<?php
setLocale(LC_TIME, 'fr_FR.UTF-8');
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
$date1 = new DateTime("2016-02-08 15:00:00");
echo "<p>Timestamp actuel :".date("U", time());
echo "<br/>Timestamp du 2 août 2016 à 15h : ".$date1->getTimestamp()."</p>";
//5
$date1 = new DateTime();
$date2 = new DateTime();
$date2->setTimestamp(1470142800);
echo "<p>Il y a ".$date2->diff($date1)->days." jours entre aujourd'hui et le 2 août 2016.</p>";
//6
$date1 = new DateTime("2016-02-01");
$date2 = new DateTime("2016-03-01");
echo "<p>Il y a ".$date2->diff($date1)->days." jours en février 2016</p>";
//7
$date1->setTimestamp(time()+(3600*24*20));
echo "<p>Dans 20 jours on sera le ".$date1->format("d/m/Y")."</p>";
//8
$date1->setTimestamp(time()-(3600*24*22));
echo "<p> ".$date1->format("d/m/Y")."</p>";
