Sichere Passwortspeicherung – PHP + SQLite

Dateien:
- register.php → Benutzer registrieren mit sicherem Passwort-Hash
- login.php    → Login mit Passwortüberprüfung (password_verify)
- setup.php    → Erstellt SQLite-Datenbank
- users.db     → Wird automatisch erstellt

Anleitung:
1. setup.php aufrufen → erstellt Datenbank
2. register.php → neuen Benutzer registrieren
3. login.php → Login mit Passwort testen

Verwendet:
- password_hash() zum Speichern
- password_verify() zum Überprüfen
