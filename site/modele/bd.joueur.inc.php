<?php

include_once "bd.inc.php";

class Joueur
{
    private $Num_Licence,$Nom_Joueur,$Prenom_Joueur,$Poste,$Num_Maillot,$Nom_Equipe,$Nationalite,$Sexe;

    function __construct($Num_Licence, $Nom_Joueur, $Prenom_Joueur, $Poste, $Num_Maillot, $Nom_Equipe, $Nationalite, $Sexe)
    {
        $this->Num_Licence = $Num_Licence;
        $this->Nom_Joueur = $Nom_Joueur;
        $this->Prenom_Joueur = $Prenom_Joueur;
        $this->Poste = $Poste;
        $this->Num_Maillot = $Num_Maillot;
        $this->Nom_Equipe = $Nom_Equipe;
        $this->Nationalite = $Nationalite;
        $this->Sexe = $Sexe;
    }
    function getNum_Licence(){
        return $this->Num_Licence;
    }
    function getNom_Joueur(){
        return $this->Nom_Joueur;
    }
    function getPrenom_Joueur(){
        return $this->Prenom_Joueur;
    }
    function getPoste(){
        return $this->Poste;
    }
    function getNum_Maillot(){
        return $this->Num_Maillot;
    }
    function getNom_Equipe(){
        return $this->Nom_Equipe;
    }
    function getNationalite(){
        return $this->Nationalite;
    }
    function getSexe(){
        return $this->Sexe;
    }
}

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
/*
function getJoueursAimesByMailU($MailU) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select joueur.* from joueur,aimer where joueur.Num_Licence = aimer.Num_Licence and MailU = :MailU");
        $req->bindValue(':MailU', $MailU, PDO::PARAM_STR);
        $req->execute();

        while ($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
            $resultat[] = $ligne;
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}*/
function getJoueursAimesByMailU($MailU)
{
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
function getJoueursByPoste($Poste) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from joueur where Poste like :Poste");
        $req->bindValue(':Poste', "%".$Poste."%", PDO::PARAM_STR);

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
}*/

function getJoueurs()
{
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from joueur");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = new Joueur(
                $ligne['Num_Licence'],$ligne['Nom_Joueur'],$ligne['Prenom_Joueur'],$ligne['Poste'],
                $ligne['Num_Maillot'],$ligne['Nom_Equipe'],$ligne['Nationalite'],$ligne['Sexe']);
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat; 
}



       







?>