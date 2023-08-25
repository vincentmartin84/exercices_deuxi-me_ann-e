<?php
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "guinot";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("Connexion échouée : " . $connexion->connect_error);
}

// Récupérer les données du formulaire
$noms = $_POST['noms'];
$prenoms = $_POST['prenoms'];
$date_naissance = $_POST['date_naissance'];
$sexe = $_POST['sexe'];
$promotion = $_POST['promotion'];
$adresse = $_POST['adresse'];
$nationalite = $_POST['nationalite'];
$domaines = isset($_POST['domaines']) ? implode(', ', $_POST['domaines']) : '';
$newsletter = isset($_POST['newsletter']) ? 'Oui' : 'Non';

// Requête d'insertion
$sql = "INSERT INTO inscrits (noms, prenoms, date_naissance, sexe, promotion, adresse, nationalite, domaines, newsletter) 
        VALUES ('$noms', '$prenoms', '$date_naissance', '$sexe', '$promotion', '$adresse', '$nationalite', '$domaines', '$newsletter')";

if ($connexion->query($sql) === TRUE) {
    echo "Inscription réussie !";
} else {
    echo "Erreur : " . $sql . "<br>" . $connexion->error;
}

$connexion->close();
?>
