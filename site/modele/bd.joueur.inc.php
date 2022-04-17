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





function getJoueursAimesByMailU($MailU) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select joueur.* from joueur,aimer where joueur.Num_Licence = aimer.Num_Licence and MailU = :MailU");
        $req->bindValue(':MailU', $MailU, PDO::PARAM_STR);
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
/*
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');

    echo "getRestos() : \n";
    print_r(getRestos());

    echo "getRestoByIdR(1) : \n";
    print_r(getRestoByIdR(1));

    echo "getRestosByNomR('charcut') : \n";
    print_r(getRestosByNomR("charcut"));

    echo "getRestosByAdresse(voieAdrR, cpR, villeR) : \n";
    print_r(getRestosByAdresse("Ravel", "33000", "Bordeaux"));
    
    echo "getRestosAimesByMailU(mailU) : \n";
    print_r(getRestosAimesByMailU("test@bts.sio"));
}*/
?>