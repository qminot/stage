
<h1>Mon profil</h1>

Mon adresse électronique : <?= $util["MailU"] ?> <br />
Mon pseudo : <?= $util["PseudoU"] ?> <br />
les joueurs que j'aime : <br />
<?php for($i=0;$i<count($mesJoueursAimes);$i++){ ?>
    <a href="./?action=detail&Num_Licence=<?= $mesJoueursAimes[$i]["Num_Licence"] ?>"><?= $mesJoueursAimes[$i]["Prenom_Joueur"] ?> <?= $mesJoueursAimes[$i]["Nom_Joueur"] ?></a><br />
<?php } ?>
<hr>
<a href="./?action=deconnexion">se deconnecter</a>


