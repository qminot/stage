<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "listeJoueurs.php";
    $lesActions["liste"] = "listeJoueurs.php";
    $lesActions["equipe"] = "equipe.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["profil"] = "monProfil.php";
    $lesActions["inscription"] = "inscription.php";
    $lesActions["detail"] = "detailJoueur.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["aimer"] = "aimer.php";
    $lesActions["recherche"] = "rechercheJoueur.php";
    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}
?>