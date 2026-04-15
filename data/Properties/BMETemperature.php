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
$temperature = null;

if (isset($thingData['properties'])) {
    foreach ($thingData['properties'] as $prop) {
        if ($prop['variable_name'] === 'bmeTemperature') {
            $temperature = round($prop['last_value'], 2);
            break;
        }
    }
}

echo json_encode([
    "value" => $temperature,
    "unit" => "°C",
    "timestamp" => date("H:i:s")
]);
?>