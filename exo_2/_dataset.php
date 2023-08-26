<?php
session_start();
const NOM_DU_SITE = "auto moto";
// Connexion à la base de données
$link = mysqli_connect("localhost", "root", "", "automoto");
mysqli_set_charset($link, "utf8");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dataset auto moto</title>
</head>

<body>
    <h1>Génération des données pour la base de données auto moto</h1>

    <?php
    // Génération des voitures en location essence
    $nb = 25;
    $tab = array(); // Initialisez le tableau
    for ($i = 0; $i < $nb; $i++) {
        $id = $i + 1; // Ajoutez 1 pour éviter l'ID null
        $type = "voiture";
        $caracteristique = "occasion";
        $carburant = "essence";
        $contrat = "location";
        $tab[] = "($id, '$type', '$caracteristique', '$carburant', '$contrat')";
    }
    $sql = "INSERT INTO vehicule VALUES " . implode(", ", $tab);
    mysqli_query($link, $sql);
    ?>

</body>

</html>
