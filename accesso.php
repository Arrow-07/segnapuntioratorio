<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesso</title>
</head>
<body>
    <?php
        require('./php/header.php');
    ?>
    <h1>Accedi</h1>
    <p>
        Per accedere inserisci le tue credenziali qui sotto; per registrarti clicca REGISTRATI!.
    </p>

    <input type="button" name="registrati" id="registrati" value="REGISTRATI!" onclick="location.href='registrati.php'">
</body>
</html>