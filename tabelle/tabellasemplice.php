<body>
    <style>
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-bottom: 30px;
        }

        .th,
        .td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .th {
            background-color: #f2f2f2;
        }

        .tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .caption{

            margin-bottom: 10px;
        }
    </style>

    <table class="table">
        <caption class="caption"><h1>PUNTI TOTALI DELLE SQUADRE</h1></caption>
        <thead>
            <tr class="tr">
                <th class="th">Posizione</th>
                <th class="th">Nome</th>
                <th class="th">Punti</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                require('dati.php');

            // Ciclo per generare le righe della tabella
            $posizione = 1;
            foreach ($classifica as $giocatore) {
                echo "<tr class=\"tr\">";
                echo "<td class=\"td\">{$posizione}</td>";
                echo "<td class=\"td\">{$giocatore['nome']}</td>";
                echo "<td class=\"td\">{$giocatore['punti']}</td>";
                echo "</tr>";
                $posizione++;
            }
            ?>
        </tbody>
    </table>
</body>