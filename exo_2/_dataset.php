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
    // Génération des voitures en location essence d'occasion 
    $nb1 = 8;
    $tab = array(); // Initialisez le tableau
    for ($i = 0; $i < $nb1; $i++) {
        //$id = $i + 1; // Ajoutez 1 pour éviter l'ID null
        $type = "voiture";
        $caracteristique = "occasion";
        $carburant = "essence";
        $contrat = "location";
        $tab[] = "(null, '$type', '$caracteristique', '$carburant', '$contrat')";
    }
    $sql = "INSERT INTO vehicule VALUES " . implode(", ", $tab);
    mysqli_query($link, $sql);
    echo "<p> $nb1 voitures d'occasion, essence, en location générées </p>";


    // génération des voitures en location diesel d'occasion 
    $nb2 = 15;
    $tab = array(); // Initialisez le tableau
    for ($i = 0; $i < $nb2; $i++) {
        //$id = $i + 1; // Ajoutez 1 pour éviter l'ID null
        $type = "voiture";
        $caracteristique = "occasion";
        $carburant = "diesel";
        $contrat = "location";
        $tab[] = "(null, '$type', '$caracteristique', '$carburant', '$contrat')";
    }
    $sql = "INSERT INTO vehicule VALUES " . implode(", ", $tab);
    mysqli_query($link, $sql);
    echo "<p> $nb2 voitures d'occasion diesel en location </p>";


    // génération des voitures neuves essence en location 
    $nb3 = 11;
    $tab = array(); // Initialisez le tableau
    for ($i = 0; $i < $nb3; $i++) {
        //$id = $i + 1; // Ajoutez 1 pour éviter l'ID null
        $type = "voiture";
        $caracteristique = "neuf";
        $carburant = "essence";
        $contrat = "location";
        $tab[] = "(null, '$type', '$caracteristique', '$carburant', '$contrat')";
    }
    $sql = "INSERT INTO vehicule VALUES " . implode(", ", $tab);
    mysqli_query($link, $sql);
    echo "<p> $nb3 voitures essence neuves en location générées </p>";


    // géné'ration des voitures neuves diesel en location 
    $nb4 = 6;
    $tab = array(); // Initialisez le tableau
    for ($i = 0; $i < $nb4; $i++) {
        //$id = $i + 1; // Ajoutez 1 pour éviter l'ID null
        $type = "voiture";
        $caracteristique = "neuf";
        $carburant = "diesel";
        $contrat = "location";
        $tab[] = "(null, '$type', '$caracteristique', '$carburant', '$contrat')";
    }
    $sql = "INSERT INTO vehicule VALUES " . implode(", ", $tab);
    mysqli_query($link, $sql);
    echo "<p> $nb4 voitures diesel neuves en location </p>";



    // génération voitures essence d'occasion à l'achat 
    $nb5 = 5;
    $tab = array(); // Initialisez le tableau
    for ($i = 0; $i < $nb5; $i++) {
        //$id = $i + 1; // Ajoutez 1 pour éviter l'ID null
        $type = "voiture";
        $caracteristique = "occasion";
        $carburant = "essence";
        $contrat = "achat";
        $tab[] = "(null, '$type', '$caracteristique', '$carburant', '$contrat')";
    }
    $sql = "INSERT INTO vehicule VALUES " . implode(", ", $tab);
    mysqli_query($link, $sql);
    echo "<p>$nb5 voitures d'occasion essence à l''achat </p>";

    // génération des voitures neuves essence à l'achat
    $nb6 = 5;
    $tab = array(); // Initialisez le tableau
    for ($i = 0; $i < $nb6; $i++) {
        //$id = $i + 1; // Ajoutez 1 pour éviter l'ID null
        $type = "voiture";
        $caracteristique = "neuf";
        $carburant = "essence";
        $contrat = "achat";
        $tab[] = "(null, '$type', '$caracteristique', '$carburant', '$contrat')";
    }
    $sql = "INSERT INTO vehicule VALUES " . implode(", ", $tab);
    mysqli_query($link, $sql);
    echo "<p> $nb6 voitures essence neuves à l'achat </p>";

    // genération des voitures diesel d'occasion à l'achat
    $nb7 = 4;
    $tab = array(); // Initialisez le tableau
    for ($i = 0; $i < $nb7; $i++) {
        //$id = $i + 1; // Ajoutez 1 pour éviter l'ID null
        $type = "voiture";
        $caracteristique = "occasion";
        $carburant = "diesel";
        $contrat = "achat";
        $tab[] = "(null, '$type', '$caracteristique', '$carburant', '$contrat')";
    }
    $sql = "INSERT INTO vehicule VALUES " . implode(", ", $tab);
    mysqli_query($link, $sql);
    echo "<p> $nb7 voitures diesel d'occasion à l'achat </p>";


    // génération des voitures disel neuves à l'achat 
    $nb8 = 3;
    $tab = array(); // Initialisez le tableau
    for ($i = 0; $i < $nb8; $i++) {
        //$id = $i + 1; // Ajoutez 1 pour éviter l'ID null
        $type = "voiture";
        $caracteristique = "neuf";
        $carburant = "diesel";
        $contrat = "achat";
        $tab[] = "(null, '$type', '$caracteristique', '$carburant', '$contrat')";
    }
    $sql = "INSERT INTO vehicule VALUES " . implode(", ", $tab);
    mysqli_query($link, $sql);
    echo "<p> $nb8 voitures diesel neuves à l'achat </p>";


    //génération des motos neuves en location 
    $nb9 = 8;
    $tab = array(); // Initialisez le tableau
    for ($i = 0; $i < $nb9; $i++) {
        //$id = $i + 1; // Ajoutez 1 pour éviter l'ID null
        $type = "moto";
        $caracteristique = "neuf";
        $carburant = "essence";
        $contrat = "location";
        $tab[] = "(null, '$type', '$caracteristique', '$carburant', '$contrat')";
    }
    $sql = "INSERT INTO vehicule VALUES " . implode(", ", $tab);
    mysqli_query($link, $sql);
    echo "<p> $nb9 motos neuves en location</p>";


    // génération des motos d'occasion en location 
    $nb10 = 6;
    $tab = array(); // Initialisez le tableau
    for ($i = 0; $i < $nb10; $i++) {
        //$id = $i + 1; // Ajoutez 1 pour éviter l'ID null
        $type = "moto";
        $caracteristique = "occasion";
        $carburant = "essence";
        $contrat = "location";
        $tab[] = "(null, '$type', '$caracteristique', '$carburant', '$contrat')";
    }
    $sql = "INSERT INTO vehicule VALUES " . implode(", ", $tab);
    mysqli_query($link, $sql);
    echo "<p> $nb10 motos d'occasion en location </p>";

    //génération des moto neuve à l'achat
    $nb11 = 9;
    $tab = array(); // Initialisez le tableau
    for ($i = 0; $i < $nb11; $i++) {
        //$id = $i + 1; // Ajoutez 1 pour éviter l'ID null
        $type = "moto";
        $caracteristique = "achat";
        $carburant = "essence";
        $contrat = "achat";
        $tab[] = "(null, '$type', '$caracteristique', '$carburant', '$contrat')";
    }
    $sql = "INSERT INTO vehicule VALUES " . implode(", ", $tab);
    mysqli_query($link, $sql);
    echo "<p> $nb11 motos neuves à l'achat </P>";

    //génération des motos d'occasion à l'achat
    $nb12 = 7;
    $tab = array(); // Initialisez le tableau
    for ($i = 0; $i < $nb12; $i++) {
        //$id = $i + 1; // Ajoutez 1 pour éviter l'ID null
        $type = "moto";
        $caracteristique = "occasion";
        $carburant = "essence";
        $contrat = "achat";
        $tab[] = "(null, '$type', '$caracteristique', '$carburant', '$contrat')";
    }
    $sql = "INSERT INTO vehicule VALUES " . implode(", ", $tab);
    mysqli_query($link, $sql);
    echo "<p> $nb12 moto d'occasion à l'achat </p>";
    ?>

</body>

</html>