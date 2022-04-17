<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.equipe.inc.php";


// recuperation des donnees GET, POST, et SESSION
;
$menuVolley = array();
$menuVolley[] = Array("url"=>"#top","label"=>"Conditions générales");
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeequipes = getEquipes();

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des equipes";
include "$racine/vue/entete.html.php";
include "$racine/vue/pied.html.php";
include "$racine/vue/vueequipe.php";

?>