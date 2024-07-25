<?php
$host="localhost";
$user="root";
$pw="";
$db="punti";


$connessione=new mysqli($host,$user,$pw,$db);

if($connessione === false){
    die("CONNESSIONE NON RIUSCITA ERRORE: " . $connessione->error);
}

?>