<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription staff</title>
</head>
<?php require './components/Header.php' ?>

<body>
    <h2>inscription staff</h2>
    <form method="get">
        <p>
            <label for="sta_nom">nom:</label>
            <input type="text" name="sta_nom">
        </p>
        <p>
            <label for="sta_prenom">prenom:</label>
            <input type="text" name="sta_prenom">
        </p>
        <p>
            <label for="sta_mail">mail: </label>
            <input type="text" name="sta_mail">
        </p>
        <p>
            <label for="sta_pwd">mot de passe:</label>
            <input type="text" name="sta_pwd">
        </p>
        <p>
            <label for="sta_pwd2">confirmer le mot de passe</label>
            <input type="text" name="sta_pwd2">
        </p>
        <p>
            <input type="submit" name="btsubmit" value="valider">
        </p>
    </form>


</body>
<?php require './components/Footer.php' ?>


</html>