<body>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>

    <table>
        <thead>
            <tr>
                <th>Posizione</th>
                <th>Nome</th>
                <th>Punti</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                require('dati.php');

            // Ciclo per generare le righe della tabella
            $posizione = 1;
            foreach ($classifica as $giocatore) {
                echo "<tr>";
                echo "<td>{$posizione}</td>";
                echo "<td>{$giocatore['nome']}</td>";
                echo "<td>{$giocatore['punti']}</td>";
                echo "</tr>";
                $posizione++;
            }
            ?>
        </tbody>
    </table>
</body>