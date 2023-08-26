<?php

require '../include/Config.php';
$sql = 'select * from vehicule where veh_type="moto" ';
//envoie la requête au serveur mysql, et récupère un pointeur sur le jeu de données
$resultat = mysqli_query($link, $sql);
if (!$resultat) {
    die("Erreur dans la requête: " . mysqli_error($link));
}
//Charge toutes les données dans un tableau à 2 dimsensions
$data = mysqli_fetch_all($resultat, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motos</title>
</head>
<?php require '../components/Header.php' ?>

<body>
    <h2>Les motos</h2>

    <p>
        Un large choix de moto en vente ou en location






    </p>

    // affichage des voitures
    <?php
    foreach ($data as $i => $row) {
        $row = array_map("mhe", $row);
        extract($row);
        $id = $row["veh_id"];
    ?>
        <div class="list-vehicule">
            <h3 class="title-vehicule"><?= $veh_type ?> </h3>
            <p>
                ID: <?= $veh_id ?>
            </p>
            <p>
                Etat: <?= $veh_caracteristique ?>
            </p>
            <p>
                Carburant: <?= $veh_carburant ?>
            </p>
            <p>
                Contrat: <?= $veh_contrat ?>
            </p>
            <p>
                <img src="../images//moto_orange.jpg" alt="" class="img_vehicule">
            </p>

        </div>
    <?php } ?>


</body>
<?php require '../components/Footer.php'  ?>

</html>