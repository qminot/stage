<h1>Les Equipes du PAC</h1>

<li id="equipe"><a href="./?action=equipe"> <img src="images/M21.jpg" width="450" height="380"  alt="logo" /></a></li>
<br />   <br />   <br />    

<li id="equipe2"><a href="./?action=equipe"> <img src="images/equipe.jpg" width="450" height="380"  alt="logo" /></a></li> 
        
<?php
for ($i = 1; $i < 2; $i++) {

    $Lesequipes = getEquipeByNom_Equipe($Nom_Equipe[$i]['Nom_Equipe']);
    ?>

        <div class="descrCard" align="left"><?php echo "<a href='./?action=detail&Nom_Equipe=" . $listeequipes [$i]['Nom_Equipe'] . "'>" . "</a>"; ?>
            <br />
            <?= $listeequipes [$i]["Nom_Equipe"] ?>
            <?= $listeequipes [$i]["J1_Entrainement"] ?>
            <br />
            <?= $listeequipes [$i]["J2_Entrainement"] ?>
            <br />
            <?= $listeequipes [$i]["J3_Entrainement"] ?>
        
        </div>
        <div class="tagCard">
            <ul id="tagFood">		

            </ul>

        </div>

     

 


    <?php
}


?>


