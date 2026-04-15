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
            animation: true,
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

    if (!window.cansatCharts) {
        window.cansatCharts = {};
    }
    
    window.cansatCharts['<?php echo $graphId; ?>'] = chart;
})();
</script>