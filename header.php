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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<style>
    #ulhead {
        background-color: <?php echo $colore4; ?>;
        list-style-type: none;
        padding: 10px;
        margin: 0;
        display: flex;
        align-items: center;
        border-radius: 12px;
    }

    #lihead {
        display: inline;
        margin-right: 20px;
    }

    #lihead:last-child {
        margin-left: auto;
    }

    #linkhead {
        color: <?php echo $colore1; ?>;
        text-decoration: none;
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        display: flex;
        align-items: center;
    }

    #linkhead #iconehead {
        margin-right: 8px;
    }
</style>

<ul id="ulhead">
    <li id="lihead"><a id="linkhead" href="index.php"> <i id="iconehead" class="fas fa-home"></i>HOME</a></li>
    <li id="lihead"><a id="linkhead" href="classifica.php"> <i id="iconehead" class="fas fa-trophy"></i> CLASSIFICA</a></li>
    <li id="lihead"><a id="linkhead" href="informazioni.php"> <i id="iconehead" class="fas fa-info-circle"></i> INFORMAZIONI</a></li>
    <li id="lihead"><a id="linkhead" href="gestisci.php"> <i id="iconehead" class="fas fa-cog"></i> GESTIONE</a></li>
    <li id="lihead"><a id="linkhead" href="accesso.php"> <i id="iconehead" class="fas fa-sign-in-alt"></i> ACCEDI</a></li>
</ul>