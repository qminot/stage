<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.joueur.inc.php";
include_once "$racine/modele/bd.equipe.inc.php";
include_once "$racine/modele/bd.photo.inc.php";
include_once "$racine/modele/authentification.inc.php";

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"#top","label"=>"Le restaurant");
$menuBurger[] = Array("url"=>"#adresse","label"=>"Adresse");
$menuBurger[] = Array("url"=>"#photos","label"=>"Photos");
$menuBurger[] = Array("url"=>"#horaires","label"=>"Horaires");
$menuBurger[] = Array("url"=>"#crit","label"=>"Critiques");

// recuperation des donnees GET, POST, et SESSION
$Num_Licence = $_GET["Num_Licence"];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$unJoueur =  getJoueurByNum_Licence($Num_Licence);
$lesPhotos = getPhotosByNum_Licence($Num_Licence);


// traitement si necessaire des donnees recuperees
;


// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "detail d'un joueur";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueDetailJoueur.php";
include "$racine/vue/pied.html.php";
?>