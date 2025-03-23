<?php
require_once 'csrf.php';
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>CSRF Demo</title>
</head>
<body>
  <h2>Nachricht senden</h2>
  <form method="POST" action="verarbeiten.php">
    <?= CSRF::getTokenInput('nachrichtenformular'); ?>
    <input type="text" name="nachricht" placeholder="Deine Nachricht">
    <button type="submit">Absenden</button>
  </form>
</body>
</html>
