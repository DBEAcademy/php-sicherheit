<?php
$errors = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $color = $_POST['color'] ?? '';

    // Datentyp prüfen
    if (!is_string($username) || !is_string($email) || !is_string($color)) {
        $errors[] = "Ungültiger Datentyp.";
    }

    // Länge prüfen
    if (strlen($username) < 3 || strlen($username) > 20) {
        $errors[] = "Benutzername muss zwischen 3 und 20 Zeichen lang sein.";
    }

    // Inhalt prüfen (nur Buchstaben und Zahlen)
    if (!preg_match('/^[a-zA-Z0-9_-]+$/', $username)) {
        $errors[] = "Benutzername enthält ungültige Zeichen.";
    }

    // E-Mail validieren
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Ungültige E-Mail-Adresse.";
    }

    // Whitelist-Prüfung
    $allowed_colors = ['rot', 'grün', 'blau'];
    if (!in_array($color, $allowed_colors)) {
        $errors[] = "Farbe ist nicht erlaubt.";
    }

    if (empty($errors)) {
        $success = true;
    }
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Formular mit Validierung</title>
</head>
<body>
    <h2>Benutzerdaten eingeben</h2>
    <?php if ($success): ?>
        <p style="color:green;">Daten erfolgreich übermittelt!</p>
    <?php else: ?>
        <?php if (!empty($errors)): ?>
            <ul style="color:red;">
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <form method="post">
            <label>Benutzername: 
                <input type="text" name="username" required minlength="3" maxlength="20" pattern="[a-zA-Z0-9_-]+">
            </label><br><br>
            <label>E-Mail: 
                <input type="email" name="email" required maxlength="50">
            </label><br><br>
            <label>Lieblingsfarbe: 
                <select name="color" required>
                    <option value="">Bitte wählen</option>
                    <option value="rot">Rot</option>
                    <option value="grün">Grün</option>
                    <option value="blau">Blau</option>
                </select>
            </label><br><br>
            <button type="submit">Absenden</button>
        </form>
    <?php endif; ?>
</body>
</html>
