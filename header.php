<?php
// Includere il file di configurazione
$colors = include('color.php');

// Assegnare i colori a variabili PHP
$colore1 = $colors['color1'];
$colore2 = $colors['color2'];
$colore3 = $colors['color3'];
$colore4 = $colors['color4'];
$colore5 = $colors['color5'];
?>


<style>
   ul {background-color: <?php echo $colore4?>;}
   a {color: <?php echo $colore1 ?>;}
</style>

<ul>
    <li><a href="classifica.php">CLASSIFICA</a></li>
    <li><a href="informazioni.php">INFORMAZIONI</a></li>
    <li><a href="impostazioni.php">IMPOSTAZIONI</a></li>
    <li><a href="accesso.php">ACCEDI</a></li>
</ul>