<!DOCTYPE html>
<html lang="cs">

<head>
    <title>Živá data | Pletium</title>

    <?php require 'includes/html_head.php'; ?>

    <link rel="stylesheet" href="/assets/css/sites/live/live.css">
    <link rel="stylesheet" href="/assets/css/sites/live/graph.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <?php require __DIR__ . '/includes/elements/nav.php'; ?>

    <main class="live-dashboard">
        
        <header class="page-header">
            <h1 class="page-title">Živá data</h1>
            <p class="page-subtitle">Sleduj data z naší mise v živém čase</p>
        </header>

        <section class="data-section">
            <h2 class="section-title">BME Senzor</h2>
            <div class="dashboard-grid">
                <?php 
                    $bmeGraphs = [
                        'bmeTemperature' => 'Teplota',
                        'bmeHumidity' => 'Vlhkost',
                        'pressure' => 'Tlak',
                        'bmeAltitude' => 'Nadmořská výška'
                    ];
                    foreach ($bmeGraphs as $id => $title) {
                        $graphId = $id;
                        $graphTitle = $title;
                        include 'includes/sites/live/graph.php'; 
                    }
                ?>
            </div>
        </section>

        <div class="divider"></div>

        <section class="data-section">
            <h2 class="section-title">SCD Senzor</h2>
            <div class="dashboard-grid">
                <?php 
                    $scdGraphs = [
                        'scdTemperature' => 'Teplota',
                        'scdHumidity' => 'Vlhkost',
                        'ppm' => 'PPM'
                    ];
                    foreach ($scdGraphs as $id => $title) {
                        $graphId = $id;
                        $graphTitle = $title;
                        include 'includes/sites/live/graph.php'; 
                    }
                ?>
            </div>
        </section>

        <div class="divider"></div>

        <section class="data-section">
            <h2 class="section-title">Solární panely</h2>
            <div class="dashboard-grid">
                <?php 
                    $solarGraphs = [
                        'current' => 'Proud',
                        'voltage' => 'Napětí'
                    ];
                    foreach ($solarGraphs as $id => $title) {
                        $graphId = $id;
                        $graphTitle = $title;
                        include 'includes/sites/live/graph.php'; 
                    }
                ?>
            </div>
        </section>

    </main>

    <script>
        async function fetchAllData() {
            try {
                const response = await fetch('data/Properties/get_data.php');
                const allData = await response.json();

                const setOfflineMode = (isOffline) => {
                    document.querySelectorAll('.graph-card').forEach(card => {
                        if (isOffline) {
                            card.classList.add('is-offline');
                        } else {
                            card.classList.remove('is-offline');
                        }
                    });
                };

                if (allData.error) {
                    console.error("Chyba z API:", allData.error);
                    setOfflineMode(true);
                    return;
                }

                let isOnline = false;
                if (allData.status && allData.status.value !== undefined) {
                    const statusVal = allData.status.value;
                    isOnline = (statusVal === true || statusVal === "true" || statusVal === 1);
                }

                if (!isOnline) {
                    setOfflineMode(true);
                    return;
                } else {
                    setOfflineMode(false);
                }

                for (const graphId in window.cansatCharts) {
                    if (allData[graphId]) {
                        const chart = window.cansatCharts[graphId];
                        const sensorData = allData[graphId];

                        const valEl = document.getElementById('val-' + graphId);
                        const unitEl = document.getElementById('unit-' + graphId);
                        
                        if(valEl) valEl.innerText = sensorData.value;
                        if(unitEl) unitEl.innerText = sensorData.unit;

                        chart.data.labels.push(sensorData.timestamp || '');
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
                document.querySelectorAll('.graph-card').forEach(c => c.classList.add('is-offline'));
            }
        }

        setInterval(fetchAllData, 1000);
        fetchAllData();
    </script>
</body>
</html>