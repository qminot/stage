
<h1>Liste des joueurs</h1>

<?php
for ($i = 0; $i < count($listejoueurs); $i++) {
    ?>


    <?php
    $lesPostes = getJoueursByPoste($listejoueurs[$i]['Poste']);
    $LesPhotos = getPhotosByNum_Licence($listejoueurs[$i]['Num_Licence']);
    
    ?>

    <div class="card">
        <div class="photoCard">
            <?php if (count($LesPhotos) > 0) { ?>
                <img src="images/<?= $LesPhotos[0]["CheminP"] ?>" alt="photo du joueur" />
            <?php } ?>


        </div>
        <div class="descrCard"><?php echo "<a href='./?action=detail&Num_Licence=" . $listejoueurs[$i]['Num_Licence'] . "'>" . $listejoueurs[$i]['Nom_Joueur'] .' '.$listejoueurs[$i]["Prenom_Joueur"]. "</a>"; ?>
           
           
         
       
 
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


