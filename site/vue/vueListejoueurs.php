
<h1>Liste des joueurs</h1>

<?php
foreach  ($listejoueurs as $unJoueur) {
    
    $LesPhotos = getPhotosByNum_Licence($unJoueur->getNum_Licence());
    ?>

    <div class="card">
        <div class="photoCard">
            <?php if (count($LesPhotos) > 0) { ?>
                <img src="images/<?= $LesPhotos[0]["CheminP"] ?>" alt="photo du joueur"  />
            <?php } ?>


        </div>
        <div class="descrCard"><?php echo "<a href='./?action=detail&Num_Licence=" . $unJoueur->getNum_Licence() . "'>" . $unJoueur->getNom_Joueur() .' '.$unJoueur->getPrenom_Joueur(). "</a>"; ?>
           
        </div>
        <div class="tagCard">
            <ul id="tagFood">		

            </ul>


        </div>

    </div>
<?php
}


?>
 


