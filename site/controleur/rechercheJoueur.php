<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.joueur.inc.php";
include_once "$racine/modele/bd.photo.inc.php";

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"./?action=recherche&critere=poste","label"=>"Recherche par poste");


// critere de recherche par defaut
$critere = "Poste";
if (isset($_GET["critere"])) {
    $critere = $_GET["critere"];
}

// recuperation des donnees GET, POST, et SESSION
if (isset($_GET["critere"])){
    $critere = $_GET["critere"];
}
$Poste="";
if (isset($_POST["Poste"])){
    $Poste = $_POST["Poste"];
}



// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 


switch($critere){
    case 'Poste':
        // recherche par nom
        $listeJoueurs = getJoueursByPoste($Poste);
        break;

    
}


// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Recherche d'un joueur";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueRechercheJoueur.php";
if (!empty($_POST)) {
    // affichage des resultats de la recherche
    include "$racine/vue/vueResultRecherche.php";
}
include "$racine/vue/pied.html.php";


?>