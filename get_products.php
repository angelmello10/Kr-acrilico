<?php

// URL de tu base de datos en Firebase
$databaseURL = "https://english-platform-3f63d-default-rtdb.firebaseio.com/products.json";

// Inicializa cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $databaseURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

header('Content-Type: application/json');
echo $response;
