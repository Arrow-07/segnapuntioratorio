<script>


    <?php 
        require('dati.php');
    ?>


    // Dati per i grafici
    const nomi = <?php echo json_encode($nomi); ?>;
    const punti = <?php echo json_encode($punti); ?>;


    // Configurazione del grafico a colonne
    const barCtx = document.getElementById('barChart').getContext('2d');
        const barChart = new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: nomi,
                datasets: [{
                    label: 'Punti',
                    data: punti,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
</script>