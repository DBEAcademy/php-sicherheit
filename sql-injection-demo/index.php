<?php
// index.php
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>SQL Injection Demo</title>
</head>
<body>
  <h2>Login Formular (unsicher)</h2>
  <form method="POST" action="login.php">
    <input type="text" name="username" placeholder="Benutzername"><br>
    <input type="password" name="password" placeholder="Passwort"><br>
    <button type="submit">Einloggen</button>
  </form>
</body>
</html>
