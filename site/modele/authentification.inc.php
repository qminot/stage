<?php

include_once "bd.utilisateur.inc.php";

function login($MailU, $MdpU) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $util = getUtilisateurByMailU($MailU);
    $mdpBD = $util["MdpU"];

    if (trim($mdpBD) == trim(crypt($MdpU, $mdpBD))) {
        // le mot de passe est celui de l'utilisateur dans la base de donnees
        $_SESSION["MailU"] = $MailU;
        $_SESSION["MdpU"] = $mdpBD;
    }
}

function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["MailU"]);
    unset($_SESSION["MdpU"]);
}

function getMailULoggedOn(){
    if (isLoggedOn()){
        $ret = $_SESSION["MailU"];
    }
    else {
        $ret = "";
    }
    return $ret;
        
}

function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    if (isset($_SESSION["MailU"])) {
        $util = getUtilisateurByMailU($_SESSION["MailU"]);
        if ($util["MailU"] == $_SESSION["MailU"] && $util["MdpU"] == $_SESSION["MdpU"]
        ) {
            $ret = true;
        }
    }
    return $ret;
}
/*
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');


    // test de connexion
    login("test@bts.sio", "sio");
    if (isLoggedOn()) {
        echo "logged";
    } else {
        echo "not logged";
    }

    // deconnexion
    logout();
}*/
?>