<h1>Les équipes du PAC</h1>
<h2 id="M21">
L'équipe M21:
</h2>
<a href="./?action=equipe"> <img src="images/M21.jpg" width="450" height="380"  alt="logo" /></a>
<br />   <br />   <br />    
 
        
<?php
 

    $Lesequipes = getEquipeByNom_Equipe($Nom_Equipe[0]['Nom_Equipe']);
    ?>

        <div class="descrCard" ><?php echo "<a href='./?action=detail&Nom_Equipe=" . $listeequipes [0]['Nom_Equipe'] . "'>" . "</a>"; ?>
            <br />
            Si tu souhaites t'entrainer avec l'équipe de <?= $listeequipes [0]["Nom_Equipe"] ?> du PAC ou juste passer voir comment l'équipe joue et s'entraine tu peux passer 
            le <?= $listeequipes [0]["J1_Entrainement"] ?> à la salle de musculation du STAPS de Lacretelle, le <?= $listeequipes [0]["J2_Entrainement"] ?> au gymnase dupleix et
            le <?= $listeequipes [0]["J3_Entrainement"] ?> à domicile aussi.
 

            <br /><br />
        Clique<a href="https://www.ffvbbeach.org/ffvbapp/resu/vbspo_calendrier.php?saison=2021/2022&codent=PTIDF91&saison=2021/2022&poule=G21"> ici</a> si tu veux voir les résultats de l'équipe.
        </div>


     
        <h2 id="N2" >
L'équipe de N2:
</h2>
<a href="./?action=equipe"> <img src="images/equipe.jpg" width="451" height="381"  alt="logo" /></a>
<br />   <br />   <br />    
 
        
<?php
$Lesequipes = getEquipeByNom_Equipe($Nom_Equipe[1]['Nom_Equipe']);
    ?>

        <div class="descrCard" ><?php echo "<a href='./?action=detail&Nom_Equipe=" . $listeequipes [1]['Nom_Equipe'] . "'>" . "</a>"; ?>
            <br />
            Si tu souhaites t'entrainer avec l'équipe de <?= $listeequipes [1]["Nom_Equipe"] ?> du PAC ou juste passer voir comment l'équipe joue et s'entraine tu peux passer 
            le <?= $listeequipes [1]["J1_Entrainement"] ?> à la salle de musculation du STAPS de Lacretelle, le <?= $listeequipes [1]["J2_Entrainement"] ?> au gymnase de Lacretelle et
            le <?= $listeequipes [0]["J3_Entrainement"] ?> à domicile au gymnase de Dupleix.
 

            <br /><br />
        Clique<a href="http://www.ffvbbeach.org/ffvbapp/resu/seniors/2021-2022/index_2md.htm"> ici</a> si tu veux voir les résultats de l'équipe.
        </div>

 


