<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title><?php echo $titre ?></title>
        <style type="text/css">
            @import url("css/base.css");
            @import url("css/form.css");
            @import url("css/cgu.css");
            @import url("css/corps.css");
        </style>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    </head>
    <body>
    <nav>
            
        <ul id="menuGeneral">
            <li><a href="./?action=accueil">Accueil</a></li> 
            <li><a href="./?action=equipe">Les equipes</a></li> 
            <li></li> 
            <li id="logo"><a href="./?action=accueil"> <img src="images/logo_PAC.jpg" width="150" height="80"  alt="logo" /></a></li>
            <li></li> 
            <?php if(isLoggedOn()){ ?>
                <li><a href="./?action=profil"><img src="images/profil.png" alt="loupe" />Mon Profil</a></li>
                <?php } 
                else{ ?>
                <li><a href="./?action=connexion"><img src="images/profil.png" alt="loupe" />Connexion</a></li>
                <?php } ?>
            <li></li> 
            <li></li> 
                         

            

        </ul>
    </nav>
    <div id="bouton">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <ul id="menuContextuel">
        <li><img src="images/logoN2.jpg" width="150" height="80" alt="logo" /></li>
        <?php if (isset($menuVolley)) { ?>
            <?php for ($i = 0; $i < count($menuVolley); $i++) { ?>
                <li>
                    <a href="<?php echo $menuVolley[$i]['url']; ?>">
                        <?php echo $menuVolley[$i]['label']; ?>
                    </a>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>

    <div id="corps">