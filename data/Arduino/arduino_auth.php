<?php
// Načtení konfigurace z .env
$envPath = __DIR__ . '/../../.env';
$env = parse_ini_file($envPath);

function getArduinoToken($env) {
    $clientId = $env['ARDUINO_CLIENT_ID'];
    $clientSecret = $env['ARDUINO_CLIENT_SECRET'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api2.arduino.cc/iot/v1/clients/token");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials&client_id=$clientId&client_secret=$clientSecret&audience=https://api2.arduino.cc/iot");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    $data = json_decode($response, true);
    return $data['access_token'] ?? null;
}

// Získání tokenu pro ostatní soubory
$accessToken = getArduinoToken($env);
$thingId = $env['ARDUINO_THING_ID'];
?>