<?php
$pdo = new PDO('sqlite:users.db');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    $stmt = $pdo->prepare("SELECT password FROM users WHERE username = :u");
    $stmt->execute([':u' => $user]);

    $row = $stmt->fetch();

    if ($row && password_verify($pass, $row['password'])) {
        echo "✅ Login erfolgreich!";
    } else {
        echo "❌ Login fehlgeschlagen.";
    }
}
?>
<form method="POST">
  <input name="username" placeholder="Benutzername">
  <input name="password" type="password" placeholder="Passwort">
  <button>Login</button>
</form>
