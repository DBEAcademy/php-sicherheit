<?php
// login.php (unsicheres Beispiel)

$pdo = new PDO('sqlite:users.db');

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// UNSICHERE SQL-Zusammenstellung (anfällig für SQL-Injection!)
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$stmt = $pdo->query($sql);

if ($stmt && $stmt->fetch()) {
    echo "✅ Login erfolgreich – Willkommen, " . htmlspecialchars($username);
} else {
    echo "❌ Login fehlgeschlagen";
}
