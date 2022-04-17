
<h1>Recherche d'un joueur par poste </h1>
<form action="./?action=recherche&critere=<?= $critere ?>" method="POST">


    <?php
    switch ($critere) {
        case "Poste":
            ?>
            Recherche par poste : <br />
            <input type="text" name="Poste" placeholder="Poste" value="<?= $Poste ?>" /><br />
            <?php
            break;
    }
    ?>
    <br /><br />
    <input type="submit" value="Rechercher" />

</form>
