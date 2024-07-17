<?php
// Array di esempio per la classifica
$classifica = [
    ["nome" => "Rossi", "punti" => 1200],
    ["nome" => "Blu", "punti" => 1150],
    ["nome" => "Verdi", "punti" => 1100],
    ["nome" => "Gialli", "punti" => 1050],
];

// Preparazione dei dati per i grafici
$nomi = [];
$punti = [];
foreach ($classifica as $giocatore) {
    $nomi[] = $giocatore['nome'];
    $punti[] = $giocatore['punti'];
}

?>

