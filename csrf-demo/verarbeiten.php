<?php
require_once 'csrf.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userToken = $_POST['csrf_token'] ?? '';
    $nachricht = $_POST['nachricht'] ?? '';

    if (CSRF::validateToken('nachrichtenformular', $userToken)) {
        echo "✅ Nachricht empfangen: " . htmlspecialchars($nachricht);
    } else {
        echo "❌ CSRF-Token ungültig oder fehlt.";
        http_response_code(403);
    }
}
