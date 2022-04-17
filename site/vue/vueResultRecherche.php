
<h1>Liste des joueurs</h1>

<?php
for ($i = 0; $i < count($listeJoueurs); $i++) {
    ?>


    <?php
    $LesPhotos = getPhotosByNum_Licence($listejoueurs[$i]['Num_Licence']);
    
    ?>

    <div class="card">
        <div class="photoCard">
            <?php if (count($LesPhotos) > 0) { ?>
                <img src="images/<?= $LesPhotos[0]["CheminP"] ?>" alt="photo du joueur" />
            <?php } ?>


        </div>
        <div class="descrCard"><?php echo "<a href='./?action=detail&Num_Licence=" . $listejoueurs[$i]['Num_Licence'] . "'>" . $listejoueurs[$i]['Nom_joueur'] . "</a>"; ?>
            <br />
            <?= $listejoueurs[$i]["Nom_Joueur"] ?>
            <?= $listejoueurs[$i]["Prenom_Joueur"] ?>
            <br />
            <?= $listejoueurs[$i]["Poste"] ?>
            <br />
            <?= $listejoueurs[$i]["Num_Maillot"] ?>
            <?= $listejoueurs[$i]["Nationalite"] ?>
        </div>
        <div class="tagCard">
            <ul id="tagFood">		

            </ul>


        </div>

    </div>





    <?php
}
?>


