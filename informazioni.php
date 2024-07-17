<html>

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
            margin: 0 auto; /* Centrare la pagina orizzontalmente */
            margin-top: 30px;
            padding: 0 50px; /* Spazio di riempimento uniforme */
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
            3)Se fai parte dello staff o dell'equipe per aggiungere punti, devi registrarti e richiedere i permessi da Staff/Equipe/Moderatore.<br>
            4)Per imparare ad usare la pagina "Gestione", guarda il <a href="#">video tutorial</a>.<br>
            
            ---Se hai bisogno di aiuto contatta un Responsabile.---
        </p>
        
    </div>

</body>

</html>
