<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.aimer.inc.php";


// recuperation des donnees GET, POST, et SESSION
$Num_Licence = $_GET["Num_Licence"];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

$MailU = getMailULoggedOn();
if ($MailU != "") {
    $aimer = getAimerById($MailU, $Num_Licence);

// traitement si necessaire des donnees recuperees
    ;
    if ($aimer == false) {
        addAimer($MailU, $Num_Licence);
    } else {
        delAimer($MailU, $Num_Licence);
    }
}

// redirection vers le referer
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>