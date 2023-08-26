<?php
require '../include/fonction.php';

session_start();


// Connexion à la base de données
$link = mysqli_connect("localhost", "root", "", "automoto");
if (!$link) {
    die("Erreur de connexion à la base de données: " . mysqli_connect_error());
}
mysqli_set_charset($link, "utf8");
