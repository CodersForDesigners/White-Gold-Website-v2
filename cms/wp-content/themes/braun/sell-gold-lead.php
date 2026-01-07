<?php
// ajax/sell-gold-lead.php

ini_set('display_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

$apiUrl = "https://api.whitegold.online/v1/telesales/webhooks/leads";
$apiKey = "sk_a7248749543df424ddb0813552e887db3a2af048363d0cb1097293a08b352695";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request'
    ]);
    exit;
}

$mobile = trim($_POST['mobile'] ?? '');
$name   = trim($_POST['name'] ?? 'Live Gold User');

if ($mobile === '') {
    echo json_encode([
        'success' => false,
        'message' => 'Mobile number is required'
    ]);
    exit;
}

$data = [
    "mobile" => $mobile,
    "name"   => $name
];

$ch = curl_init($apiUrl);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_HTTPHEADER     => [
        "Content-Type: application/json",
        "X-API-Key: $apiKey"
    ],
    CURLOPT_POSTFIELDS     => json_encode($data),
    CURLOPT_TIMEOUT        => 30
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlErr  = curl_error($ch);
curl_close($ch);

// Debug log
file_put_contents(
    __DIR__ . '/api-log.txt',
    date('Y-m-d H:i:s') . " | HTTP:$httpCode | $response\n",
    FILE_APPEND
);

if ($curlErr) {
    echo json_encode([
        'success' => false,
        'message' => $curlErr
    ]);
    exit;
}

if ($httpCode === 200 || $httpCode === 201) {
    echo json_encode([
        'success' => true
    ]);
    exit;
}

echo json_encode([
    'success' => false,
    'message' => 'API failed',
    'status'  => $httpCode
]);
exit;
