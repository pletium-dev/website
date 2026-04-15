<link rel="stylesheet" href="/assets/css/sites/live/graph.css">

<div class="graph-card" id="card-<?php echo $graphId; ?>">
    <div class="graph-header">
        <h3 class="graph-title"><?php echo $graphTitle; ?></h3>
        <div class="graph-value-container">
            <span class="graph-current-value" id="val-<?php echo $graphId; ?>">--</span>
            <span class="graph-unit" id="unit-<?php echo $graphId; ?>">--</span>
        </div>
    </div>
    
    <div class="canvas-container">
        <canvas id="chart-<?php echo $graphId; ?>"></canvas>
    </div>
</div>

<script>
(function() {
    const ctx = document.getElementById('chart-<?php echo $graphId; ?>').getContext('2d');
    
    // Inicializace Chart.js
    const chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [],
            datasets: [{
                data: [],
                borderColor: '#00d4ff',
                backgroundColor: 'rgba(0, 212, 255, 0.1)',
                borderWidth: 2,
                pointRadius: 2,
                tension: 0.4, 
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: {
                x: { display: true },
                y: {
                    grid: { color: 'rgba(255, 255, 255, 0.05)' },
                    ticks: { color: '#888891', font: { size: 10 } }
                }
            }
        }
    });

    async function updateGraph() {
        try {
            const response = await fetch('<?php echo $apiUrl; ?>');
            const data = await response.json();

            if (data.value !== null) {
                // Aktualizace textových hodnot
                document.getElementById('val-<?php echo $graphId; ?>').innerText = data.value;
                document.getElementById('unit-<?php echo $graphId; ?>').innerText = data.unit;

                // Přidání dat do grafu
                chart.data.labels.push(data.timestamp);
                chart.data.datasets[0].data.push(data.value);

                if (chart.data.labels.length > 60) {
                    chart.data.labels.shift();
                    chart.data.datasets[0].data.shift();
                }

                chart.update();
            }
        } catch (e) {
            console.error("Chyba načítání pro <?php echo $graphId; ?>:", e);
        }
    }

    // Interval aktualizace 5 sekund
    setInterval(updateGraph, 5000);
    updateGraph(); // První načtení hned
})();
</script>