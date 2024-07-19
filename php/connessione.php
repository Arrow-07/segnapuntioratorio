<?php
$host="localhost";
$user="root";
$pw="";
$db="punti";


$connessione=new mysqli($host,$user,$pw,$db);

if($connessione === false){
    die("CONNESSIONE NON RIUSCITA ERRORE: " . $connessione->error);
}

echo("CONNESSIONE RIUSCITA");

$nome=$connessione->real_escape_string($_REQUEST['name']);
$cognome=$connessione->real_escape_string($_REQUEST['surname']);
$email=$connessione->real_escape_string($_REQUEST['e-mail']);
$password=$connessione->real_escape_string($_REQUEST['pw']);


$sql="INSERT INTO utenti (name, cognome, email, pw) VALUES
(?, ?, ?, ?)";

if($statemant = $connessione->prepare($sql)){
    $statemant->bind_param("ssss", $nome, $cognome, $email, $password);
    $statemant->execute();

    echo("inserimento ok");
}else{
    echo("ERRORE: " . $sql . $connessione->error);
}

$statemant->close();

$connessione->close();
?>