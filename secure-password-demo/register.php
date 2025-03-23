<?php
$pdo = new PDO('sqlite:users.db');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    // Passwort sicher hashen
    $hash = password_hash($pass, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:u, :p)");
    $stmt->execute([':u' => $user, ':p' => $hash]);

    echo "✅ Benutzer registriert.";
}
?>
<form method="POST">
  <input name="username" placeholder="Benutzername">
  <input name="password" type="password" placeholder="Passwort">
  <button>Registrieren</button>
</form>
