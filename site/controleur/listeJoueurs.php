<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.joueur.inc.php";
include_once "$racine/modele/bd.photo.inc.php";
 

// recuperation des donnees GET, POST, et SESSION
;
$menuVolley = array();
$menuVolley[] = Array("url"=>"./?action=recherche&critere=Poste","label"=>"Recherche par poste");
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listejoueurs = getJoueurs();

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des joueurs";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueListejoueurs.php";
include "$racine/vue/pied.html.php";

?>