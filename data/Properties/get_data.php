<?php
header('Content-Type: application/json');

require_once(__DIR__ . '/../Arduino/arduino_auth.php');

if (!$accessToken) {
    echo json_encode(["error" => "Unable to obtain an access token."]);
    exit;
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api2.arduino.cc/iot/v2/things/" . $thingId);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer " . $accessToken));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$thingData = json_decode($response, true);

$allData = [];
$timestamp = date("H:i:s");

$properties = [
    'bmeAltitude' => 'm',
    'bmeTemperature' => '°C',
    'bmeHumidity' => '%',
    'pressure' => 'hPa',
    'current' => 'mA',
    'voltage' => 'V',
    'ppm' => 'ppm',
    'scdHumidity' => '%',
    'scdTemperature' => '°C',
    'dataTime' => '',
    'rawData' => '',
    'status' => ''
];

if (isset($thingData['properties'])) {
    foreach ($thingData['properties'] as $prop) {
        $nazev = $prop['variable_name'];
        $value = $prop['last_value'];

        if (is_numeric($value) && $nazev !== 'dataTime') {
            $value = round($value, 2);
        }

        $unit = isset($properties[$nazev]) ? $properties[$nazev] : '';

        $allData[$nazev] = [
            "value" => $value,
            "unit" => $unit,
            "timestamp" => $timestamp
        ];
    }
}

echo json_encode($allData);
?>