<?php
$eingabe = $_GET['msg'] ?? '';
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>XSS Demo</title>
</head>
<body>
  <h2>XSS Demo – Unsichere Anzeige</h2>
  <form method="GET" action="">
    <input type="text" name="msg" placeholder="Nachricht">
    <button type="submit">Anzeigen</button>
  </form>

  <p><strong>Nachricht:</strong></p>
  <div style="border:1px solid #ccc;padding:10px;">
    <?= $eingabe ?>
  </div>
</body>
</html>
