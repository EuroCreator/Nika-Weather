<?php
session_start(); ?>

<?php
// $zenithTocquevilleSunrise = 90.25;
// $zenithTocquevilleSunset = 90.6;

date_default_timezone_set("Europe/Paris");
include_once("functionCookie.php");

//ça marche pas mes cookies avec mon bouton, je suis extrêmement déçu
//Je voulais ajouter des cookies tout en utilisant mon bouton, 
//et puis je voulais détruire le cookies tous les ans à partir de juillet (année scolaire terminé)

$_SESSION['DL-USER'] = "light";
$back_mode = $_SESSION["DL-USER"];

// $now = date("d/m/Y H:i:s", time());
// echo $now;
if(!isset($_SESSION["DL-USER"]))
{
    $back_mode = "dark";
} else {
    $back_mode = $_SESSION["DL-USER"];
}

// if (isset($_GET['input_mode'])) {
//     $back_mode = "light";
// } else {
//     $back_mode = "dark";
// }

include_once('functionsTest.php');
include_once('Calculs-functions.php');
include_once('WithSQL-functions.php');
$dbNW = connectDataBase();
