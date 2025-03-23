<?php
// Sicher konfigurierte Session
ini_set('session.use_only_cookies', 1);
session_set_cookie_params([
    'secure' => false, // In Produktion auf true setzen
    'httponly' => true,
    'samesite' => 'Strict'
]);
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    // Einfacher Dummy-Check (ersetzen durch echte DB-Prüfung)
    if ($user === 'admin' && $pass === 'passwort123') {
        session_regenerate_id(true);
        $_SESSION['username'] = $user;
        $_SESSION['last_activity'] = time();
        $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
        header("Location: index.php");
        exit;
    } else {
        $error = "Login fehlgeschlagen.";
    }
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post">
        <label>Benutzername: <input type="text" name="username" required></label><br>
        <label>Passwort: <input type="password" name="password" required></label><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
