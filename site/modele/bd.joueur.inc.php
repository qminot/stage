<?php

include_once "bd.inc.php";

function getJoueurByNum_Licence($Num_Licence) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from joueur where Num_Licence=:Num_Licence");
        $req->bindValue(':Num_Licence', $Num_Licence, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
function getJoueursByPoste($Poste) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from joueur where Poste=:Poste");
        $req->bindValue(':Poste', $Poste, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getJoueurs() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from joueur ");
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



function getJoueursByNom($Nom_Joueur) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from joueur where Nom_joueur like :Nom_Joueur");
        $req->bindValue(':Nom_Joueur', "%".$Nom_Joueur."%", PDO::PARAM_STR);

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







?>