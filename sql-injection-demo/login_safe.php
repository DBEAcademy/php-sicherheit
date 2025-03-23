<?php
// login_safe.php (sichere Version mit Prepared Statements)

$pdo = new PDO('sqlite:users.db');

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Sichere Variante mit Prepared Statements
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
$stmt->execute([
    ':username' => $username,
    ':password' => $password
]);

if ($stmt && $stmt->fetch()) {
    echo "✅ Login erfolgreich – Willkommen, " . htmlspecialchars($username);
} else {
    echo "❌ Login fehlgeschlagen";
}
