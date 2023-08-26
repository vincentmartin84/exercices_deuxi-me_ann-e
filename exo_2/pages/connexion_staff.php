<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion staff</title>
</head>
<?php require './components/Header.php' ?>

<body>
    <h2>connexion staff</h2>
    <form method="get">
        <p>
            <label for="sta_mail">mail: </label>
            <input type="text" name="dsta_mail">
        </p>
        <p>
            <label for="sta_pwd">mot de passe:</label>
            <input type="text" name="sta_pwd">
        </p>
        <p>
            <input type="submit" name="btsubmit" value="valider">

        </p>
    </form>

</body>
<?php require './components/Footer.php' ?>


</html>