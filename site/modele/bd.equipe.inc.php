<?php
include_once "bd.inc.php";
function getEquipes() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from equipe ");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getEquipeByNom_Equipe($Nom_Equipe) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from equipe where Nom_Equipe=:Nom_Equipe");
        $req->bindValue(':Nom_Equipe', $Nom_Equipe, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
?>