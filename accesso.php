<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="connessione.php" method="$_POST">
        <p>
            <label for="nome">Nome</label>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="cognome">Cognome</label>
            <input type="text" name="surname" id="surname">
        </p> 
        <p>
            <label for="e-mail">E-mail</label>
            <input type="text" name="e-mail" id="e-mail">
        </p>
        <p>
            <label for="password">Password</label>
            <input type="text" name="pw" id="pw">
        </p>
        
        <input type="submit" value="invia">
    </form>
</body>
</html>