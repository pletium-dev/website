<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="dashboard-grid">
    <?php 
        $graphId = 'bmeTemperature';
        $graphTitle = 'Teplota (BME)';
        include 'includes/sites/live/graph.php'; 
    ?>

    <?php 
        $graphId = 'bmeAltitude';
        $graphTitle = 'Nadmořská výška';
        include 'includes/sites/live/graph.php'; 
    ?>
</div>


<script>
async function fetchAllData() {
    try {
        const response = await fetch('data/Properties/get_data.php');
        const allData = await response.json();

        if (allData.error) {
            console.error("Chyba z API:", allData.error);
            return;
        }

        for (const graphId in window.cansatCharts) {
            
            if (allData[graphId]) {
                const chart = window.cansatCharts[graphId];
                const sensorData = allData[graphId];

                document.getElementById('val-' + graphId).innerText = sensorData.value;
                document.getElementById('unit-' + graphId).innerText = sensorData.unit;

                chart.data.labels.push(sensorData.timestamp);
                chart.data.datasets[0].data.push(sensorData.value);

                if (chart.data.labels.length > 300) {
                    chart.data.labels.shift();
                    chart.data.datasets[0].data.shift();
                }

                chart.update();
            }
        }
    } catch (e) {
        console.error("Chyba stahování datového balíku:", e);
    }
}

setInterval(fetchAllData, 1000);

fetchAllData();
</script>
</body>
</html>