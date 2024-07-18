<html>
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

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info - OratorioScore</title>
    <style>
        /* Stili CSS per la pagina */
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            /* max-width: 800px; Larghezza massima della pagina */
            margin: 0 auto;
            /* Centrare la pagina orizzontalmente */
            margin-top: 30px;
            padding: 0 50px;
            /* Spazio di riempimento uniforme */
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            font-size: 20px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 15px;
        }

        ul {
            margin-bottom: 15px;
        }

        /* Stili per i link */
        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Stili per il footer */
        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border-top: 1px solid #ccc;
        }

        footer p {
            font-size: 14px;
            color: #999;
        }

        /*TEST */
        .iframe-container {
            width: 560px;
            margin: 0 auto;
            /* Centra il contenitore orizzontalmente */
        }

        .custom-iframe {
            width: 560px;
            height: 315px;
            border: 5px solid <?php echo $colore4; ?>;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .custom-iframe:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>

    <div class="container">
        <?php
        require('header.php');
        ?>

        <h1>Informazioni su OratorioScore</h1>

        <p>In questa pagina troverai tutte le informazioni necessarie per l'utilizzo di questo sito: <br>
            1) Nella pagina "Classifica" troverai:<br>
        </p>

        <ul>
            <li>Classifica settimanale delle squadre</li>
            <li>Andamento della squadra</li>
            <li>Numero totale dei punti</li>
        </ul>
        <p> 2) Per accedere o registrarti recati nella pagina "Accedi"<br>
        </p>

        <ul>
            <li>Se sei gia registrato clicca accedi altrimenti effettua la registrazione</li>
            <li>Per registrarti sono neccesarie solo e-mail, nome, cognome e una password: è semplice!</li>`
        </ul>
        
        <p>
            3)Se fai parte dello staff o dell'equipe per aggiungere punti, devi registrarti e richiedere i permessi da Staff/Equipe/Moderatore.<br><br>
        </p>
        
        <ul>
            <li>Una volta effetuato l'accesso per riichiedere i permessi recati nella pagina gestisci e invia la domanda</li>
            <li></li>
        </ul>
        <p>
            4)Per imparare ad usare la pagina "Gestione", guarda il <a href="https://www.youtube.com/embed/GBIIQ0kP15E?si=Xu6z3VcrVeb9zAdH">video tutorial</a>:
        </p>
        <div class="iframe-container">
            <iframe class="custom-iframe" src="https://www.youtube.com/embed/GBIIQ0kP15E?si=Xu6z3VcrVeb9zAdH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <p style="font-size:18px; font-style: italic;">
            ---Se hai bisogno di aiuto contatta un Responsabile.---<br>
            Sito pensato-sviluppato-testato e publicato da G. Rossi; 100% Open Source.<br>
            Per contattarmi scrivi a <a href="mailto: Email@gmail.com">Email@gmail.com</a> o chiama il numero <a href="tel:+390123456789">Chiama +39.0123.456789!</a>
        </p>

    </div>

</body>

</html>