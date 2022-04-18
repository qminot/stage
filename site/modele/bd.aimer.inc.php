<?php

include_once "bd.inc.php";

function getAimerByMailU($MailU) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from aimer where MailU=:MailU");
        $req->bindValue(':MailU', $MailU, PDO::PARAM_STR);
        $req->execute();
        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getAimerByNum_Licence($Num_Licence) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from aimer where Num_Licence=:Num_Licence");
        $req->bindValue(':Num_Licence', $Num_Licence, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getAimerById($MailU, $Num_Licence){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from aimer where MailU=:MailU and  Num_Licence=:Num_Licence");
        $req->bindValue(':Num_Licence', $Num_Licence, PDO::PARAM_INT);
        $req->bindValue(':MailU', $MailU, PDO::PARAM_STR);
        
        $req->execute();
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addAimer($MailU, $Num_Licence) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("insert into aimer (MailU, Num_Licence) values(:MailU,:Num_Licence)");
        $req->bindValue(':Num_Licence', $Num_Licence, PDO::PARAM_INT);
        $req->bindValue(':MailU', $MailU, PDO::PARAM_STR);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function delAimer($MailU, $Num_Licence) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("delete from aimer where Num_Licence=:Num_Licence and MailU=:MailU");
        $req->bindValue(':Num_Licence', $Num_Licence, PDO::PARAM_INT);
        $req->bindValue(':MailU', $MailU, PDO::PARAM_STR);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


 
?>