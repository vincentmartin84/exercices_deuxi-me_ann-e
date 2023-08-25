<?php

$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "guinot";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

if ($connexion->connect_error) {
    die("Connexion échouée : " . $connexion->connect_error);
}

// Récupérer les données du formulaire et valider/nettoyer si nécessaire
$nom = $connexion->real_escape_string($_POST['ind_nom']);
$prenom = $connexion->real_escape_string($_POST['ind_prenom']);
$date_naissance = $connexion->real_escape_string($_POST['ind_date_naissance']);
$sexe = $connexion->real_escape_string($_POST['ind_sexe']);
$promotion = $connexion->real_escape_string($_POST['ind_promotion']);
$adresse = $connexion->real_escape_string($_POST['ind_adresse']);
$nationalite = $connexion->real_escape_string($_POST['ind_nationalite']);
$medecine = isset($_POST['ind_medecine']) ? 1 : 0;
$communication = isset($_POST['ind_communication']) ? 1 : 0;
$informatique = isset($_POST['ind_informatique']) ? 1 : 0;
$newsletter = isset($_POST['ind_newsletter']) ? 1 : 0;

// Requête d'insertion avec une requête préparée
$stmt = $connexion->prepare("INSERT INTO individu (ind_nom, ind_prenom, ind_date_naissance, ind_sexe, ind_promotion, ind_adresse, ind_nationalite, ind_medecine, ind_communication, ind_informatique, ind_newsletter) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssssssiiii", $nom, $prenom, $date_naissance, $sexe, $promotion, $adresse, $nationalite, $medecine, $communication, $informatique, $newsletter);

if ($stmt->execute()) {
    echo "Inscription réussie !";
} else {
    echo "Erreur : " . $stmt->error;
}

$stmt->close();
$connexion->close();
