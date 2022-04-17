<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "listeJoueurs.php";
    $lesActions["liste"] = "listeJoueurs.php";
    $lesActions["equipe"] = "equipe.php";
    $lesActions["listeequipe"] = "listeEquipes.php";
    $lesActions["recherche"] = "rechercheJoueur.php";
    

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}
?>