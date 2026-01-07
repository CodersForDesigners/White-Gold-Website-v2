<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * Capture incoming data (POST or JSON)
 */
$data = $_POST;

if (empty($data)) {
    $raw = file_get_contents("php://input");
    $data = json_decode($raw, true) ?? [];
}

// Log incoming data
file_put_contents(
    __DIR__ . '/form-log.txt',
    date('Y-m-d H:i:s') . " | INCOMING: " . print_r($data, true) . PHP_EOL,
    FILE_APPEND
);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Invalid request method');
}

// Validate
$name   = trim($data['name'] ?? '');
$mobile = trim($data['mobile'] ?? '');
$code   = trim($data['country_code'] ?? '+91');
$weight = trim($data['gross_weight'] ?? '');

if ($name === '' || $mobile === '') {
    http_response_code(400);
    exit('Name and Mobile are required');
}

// CRM payload
$payload = [
    "name" => $name,
    "mobile" => $code . $mobile,
    "gross_weight" => (float) $weight
];

// CRM API details
$apiUrl = "https://api.whitegold.online/v1/telesales/webhooks/leads";
$apiKey = "sk_a7248749543df424ddb0813552e887db3a2af048363d0cb1097293a08b352695";

// Send to CRM
$ch = curl_init($apiUrl);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "X-API-Key: {$apiKey}"
    ],
    CURLOPT_POSTFIELDS => json_encode($payload),
    CURLOPT_TIMEOUT => 30
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Log CRM response
file_put_contents(
    __DIR__ . '/form-log.txt',
    "CRM RESPONSE ({$httpCode}): {$response}" . PHP_EOL .
    "------------------------------------" . PHP_EOL,
    FILE_APPEND
);

// Redirect to thank-you
header("Location: " . $_SERVER['HTTP_REFERER'] . "?lead=success");
exit;
