<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classifica - OratorioScore</title>
    <style>
        /* Stili CSS per la pagina */
        body {
            margin: 0;
            padding: 0;
        }
        .head {
            margin: 0 auto;
            /* Centrare la pagina orizzontalmente */
            margin-top: 30px;
            padding: 0 50px;
        }
        .container {
            max-width: 800px;  /* Larghezza massima della pagina */
            margin: 0 auto; /* Centrare la pagina orizzontalmente */
            margin-top: 30px;
            padding: 0 50px; /* Spazio di 50px a sinistra e a destra */
        }

        .charts {
            margin-top: 50px;
        }

        .chart-container {
            width: 100%;
            height: 400px;
            margin-bottom: 50px;
        }
    </style>
</head>

<body> 
    <div class="head">
    <?php
        require('header.php');
    ?>
    </div>
    <div class="container">
       

        <h1>CLASSIFICA </h1>
        <div class="charts">
            <div class="chart-container">
                <canvas id="barChart"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="lineChart"></canvas>
            </div>
        </div>
        <?php
            require('./tabelle/tabellasemplice.php');
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <?php
        require('./tabelle/tabellacollonne.php');
        require('./tabelle/tabellarighe.php');
    ?>
</body>

</html>
