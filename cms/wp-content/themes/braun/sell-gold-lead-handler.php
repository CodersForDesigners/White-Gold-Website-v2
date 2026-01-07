<?php
// ajax/sell-gold-lead.php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$apiUrl = "https://api.whitegold.online/v1/telesales/webhooks/leads";
$apiKey = "sk_a7248749543df424ddb0813552e887db3a2af048363d0cb1097293a08b352695";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request'
    ]);
    exit;
}

$name         = trim($_POST['name'] ?? '');
$mobile       = trim($_POST['mobile'] ?? '');
$gross_weight = trim($_POST['gross_weight'] ?? '');

$data = [
    "name" => $name,
    "mobile" => $mobile,
    "gross_weight" => (float) $gross_weight
];

$ch = curl_init($apiUrl);

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "X-API-Key: $apiKey"
    ],
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_TIMEOUT => 30
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    echo json_encode([
        'success' => false,
        'message' => curl_error($ch)
    ]);
    exit;
}

curl_close($ch);

// Log for debugging
file_put_contents(
    __DIR__ . '/api-log.txt',
    date('Y-m-d H:i:s') . " | HTTP: $httpCode | $response\n",
    FILE_APPEND
);

if ($httpCode === 200 || $httpCode === 201) {
    echo '<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <script>
            window.location.href = "https://whitegold.money/thank-you/";
        </script>
    </head>
    <body></body>
    </html>';
    exit;
}

echo json_encode([
    'success' => false,
    'message' => 'API failed'
]);
exit;
?>

<!-- <script>
(function () {

    const form = document.querySelector('.js_sell_gold_form_new');
    if (!form) {
        console.error('Sell gold form not found');
        return;
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        e.stopPropagation();

        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData
        })
        .then(res => res.text())
        .then(text => {
            console.log('RAW RESPONSE:', text);

            let data;
            try {
                data = JSON.parse(text);
            } catch (e) {
                alert('Invalid server response');
                return;
            }

            if (data.success === true) {
                window.location.replace('/thank-you/');
            } else {
                alert(data.message || 'Submission failed');
            }
        })
        .catch(err => {
            console.error(err);
            alert('Network error');
        });
    });

})();
</script> -->

