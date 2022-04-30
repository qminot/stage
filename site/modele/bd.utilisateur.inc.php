<?php

include_once "bd.inc.php";

function getUtilisateurs() {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from utilisateur");
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

function getUtilisateurByMailU($MailU) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from utilisateur where MailU=:MailU");
        $req->bindValue(':MailU', $MailU, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addUtilisateur($MailU, $MdpU, $PseudoU) {
    try {
        $cnx = connexionPDO();

        $mdpUCrypt = crypt($MdpU, "sel");
        $req = $cnx->prepare("insert into utilisateur (MailU, MdpU, PseudoU) values(:MailU,:MdpU,:PseudoU)");
        $req->bindValue(':MailU', $MailU, PDO::PARAM_STR);
        $req->bindValue(':MdpU', $mdpUCrypt, PDO::PARAM_STR);
        $req->bindValue(':PseudoU', $PseudoU, PDO::PARAM_STR);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}



?>