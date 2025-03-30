<?php

// URL de tu base de datos en Firebase
$databaseURL = "https://english-platform-3f63d-default-rtdb.firebaseio.com/products.json";

// Inicializa cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $databaseURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la solicitud
$response = curl_exec($ch);
curl_close($ch);

// Verificar si la respuesta es válida
if ($response === false) {
    echo json_encode(["error" => "No se pudo obtener los productos"]);
    exit;
}

// Decodificar y devolver la respuesta
header('Content-Type: application/json');
echo $response;
?>
