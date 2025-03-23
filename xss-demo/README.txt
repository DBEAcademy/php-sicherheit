XSS Demo in PHP

Dateien:
- index.php  -> UNSICHERE Version (zeigt XSS-Verwundbarkeit)
- safe.php   -> SICHERE Version (verwendet htmlspecialchars)

Benutzung:
- Starte mit `index.php` und gib z. B. ein:
  <script>alert('XSS')</script>

- Danach rufe `safe.php` auf und sieh den Unterschied.

Nur zu Lernzwecken!
