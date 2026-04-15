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
        $graphId = 'bme-temp';
        $graphTitle = 'Teplota (BME)';
        $apiUrl = 'data/Properties/BME/BMETemperature.php';
        include 'includes/sites/live/graph.php'; 
    ?>

    <?php 
        $graphId = 'bme-press';
        $graphTitle = 'Tlak vzduchu';
        $apiUrl = 'data/Properties/BME/BMEPressure.php';
        include 'includes/sites/live/graph.php'; 
    ?>
</div>
</body>
</html>