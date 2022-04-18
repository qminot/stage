
<h1><?= $unJoueur['Prenom_Joueur']; ?>

<?php if ($aimer != false) { ?>
    <a href="./?action=aimer&Num_Licence=<?= $unJoueur['Num_Licence']; ?>" ><img class="aimer" src="images/aime.png" width="75" height="80" alt="j'aime ce joueur"></a>
<?php } else { ?>
    <a href="./?action=aimer&Num_Licence=<?= $unJoueur['Num_Licence']; ?>" ><img class="aimer" src="images/aimepas.png" width="75" height="80" alt="je n'aime pas ce joueur"></a>
<?php } ?>

</h1>



<p id="principal">
<?php if (count($lesPhotos) > 0) { ?>
    <img src="images/<?= $lesPhotos[0]["CheminP"]  ?>"    width="250" height="380" align="midle"  alt="photo du joueur" />
<?php } ?>
<br />
 
</p>
<h2 id="desrcription">
Descritption
</h2>
<p>
Salut je m'appelle <?= $unJoueur['Prenom_Joueur']; ?> <?= $unJoueur['Nom_Joueur']; ?>. Je suis un joueur de volley du Paris Amical Camou. Je joue dans l'équipe <?= $unJoueur['Nom_Equipe']; ?> du PAC. Je suis de nationalité <?= $unJoueur['Nationalite']; ?>e et dans mon équipe je joue au poste de <?= $unJoueur['Poste']; ?>.
 
</p>

 

 