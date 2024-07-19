<script>
    <?php
    require('dati.php');
    ?>
    // Configurazione del grafico a righe
    const lineCtx = document.getElementById('lineChart').getContext('2d');
    const lineChart = new Chart(lineCtx, {
        type: 'line',
        data: {
            labels: nomi,
            datasets: [{
                label: 'Punti',
                data: punti,
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1,
                fill: false
            }]
        },
        options: {
            responsive: true,
            plugins: {
                    title: {
                        display: true,
                        text: 'ANDAMENTO PUNTI',
                        font: {
                            size: 20,
                            family: 'Oswald',
                            weight: 'bold',
                        }
                    }
                },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>