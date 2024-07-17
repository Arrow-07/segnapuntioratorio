<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina con immagine e didascalie</title>
    <style>
        /* Stili CSS per la pagina */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            /*max-width: 800px;  Larghezza massima della pagina */
            margin: 0 auto;
            /* Centrare la pagina orizzontalmente */
            margin-top: 30px;
            padding: 0 50px;
            /* Spazio di 50px a sinistra e a destra */
        }

        .content {
            display: flex;
            align-items: center;
            margin-top: 50px;
            /* Spazio sopra il contenuto */
        }

        .circle {
            width: 300px;
            /* Dimensioni dell'immagine tonda */
            height: 300px;
            border-radius: 50%;
            /* Per rendere l'immagine tonda */
            overflow: hidden;
            /* Nasconde parti dell'immagine che superano il bordo del cerchio */
            margin-right: 20px;
            /* Spazio a destra dell'immagine */
        }

        .circle img {
            width: 100%;
            /* Riempie completamente il cerchio */
            height: auto;
        }

        .line {
            width: 5px;
            /* Spessore della linea verticale */
            height: 350px;
            /* Altezza della linea */
            background-color: #333;
            /* Colore della linea */
            margin-right: 20px;
            /* Spazio a destra della linea */
        }

        .caption {
            flex: 1;
            /* Occupa lo spazio rimanente */
        }

        .small-caption {
            margin-bottom: 50px;
        }

        .small-caption h1 {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .options {
            list-style-type: none;
            padding: 0;
            columns: 2;
            /* Dividere in due colonne */
        }

        .options li {
            margin-bottom: 30px;
            /*spazio tra le righe*/
        }

        .options li .bullet {
            display: inline-block;
            width: 8px;
            height: 8px;
            background-color: #333;
            border-radius: 50%;
            /* Pallino */
            margin-right: 5px;
        }

        .options li a {
            color: #007bff;
            /* Colore del link */
            text-decoration: none;
        }

        .options li a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php
        require('header.php');
        ?>
        <div class="content">
            <div class="circle">
                <img src="./img/logo.png" alt="Immagine">
            </div>
            <div class="line"></div>
            <div class="caption">
                <h1>Benvenuti su OratorioScore!</h1>
                <p>
                    Scopri la nostra piattaforma dedicata per segnare i punteggi dell'oratorio estivo!<br><br>
                    OratorioScore è il tuo compagno ideale per vivere un'estate di competizione e divertimento. Sia che tu sia un partecipante appassionato, un genitore entusiasta o un coordinatore di eventi, OratorioScore ti offre una soluzione semplice e intuitiva per segnare i punteggi, gestire le classifiche e seguire le performance in tempo reale.<br><br>
                    Entra nel gioco, celebra ogni successo e vivi l'esperienza dell'oratorio estivo con OratorioScore!
                </p>
            </div>
        </div>
        <div class="small-caption">
            <h1>Per Iniziare:</h1>
            <ul class="options">
                <li><span class="bullet"></span> Consulta la classifica: <a href="classifica.php">classifica</a></li>
                <li><span class="bullet"></span> Impara ad usare il sito: <a href="informazioni.php">informazioni</a></li>
                <li><span class="bullet"></span> Accedi: registrati o fai il login nella pagina <a href="accesso.php">accedi</a></li>
                <li><span class="bullet"></span> Modifica impostazioni e aggiungi punti: <a href="gestisci.php">gestione</a> (devi aver il permesso)</li>
            </ul>
        </div>
    </div>
</body>

</html>