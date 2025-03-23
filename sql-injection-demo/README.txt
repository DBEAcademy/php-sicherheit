SQL Injection Demo – PHP + SQLite

Dateien:
- index.php       → Login-Formular
- login.php       → UNSICHER: Verwundbar für SQL-Injection
- login_safe.php  → SICHER: Verwendet Prepared Statements
- setup.php       → Erstellt eine SQLite-Datenbank mit Testbenutzern
- users.db        → Wird von setup.php automatisch generiert

Test (unsicher):
1. setup.php einmal aufrufen.
2. Gehe zu index.php
3. Gib ein: Benutzername: ' OR '1'='1   Passwort: beliebig
   → Login wird trotz falscher Daten erlaubt

Test (sicher):
1. Ändere das Formular in index.php, um zu login_safe.php zu schicken.
2. SQL-Injection funktioniert NICHT mehr.
