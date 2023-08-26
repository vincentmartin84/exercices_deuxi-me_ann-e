<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion client</title>
</head>
<?php require './components/Header.php' ?>

<body>
    <h2>connexion client</h2>
    <form method="get">
        <p>
            <label for="cli_mail">mail: </label>
            <input type="text" name="cli_mail">
        </p>
        <p>
            <label for="cli_pwd">mot de passe:</label>
            <input type="text" name="cli_pwd">
        </p>
        <p>
            <input type="submit" name="btsubmit" value="valider">

        </p>
    </form>

</body>
<?php require './components/Footer.php' ?>


</html>