<?php
// setup.php – Erstellt eine SQLite-Datenbank mit Beispieldaten

$db = new PDO('sqlite:users.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->exec("CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT,
    password TEXT
)");

$db->exec("INSERT INTO users (username, password) VALUES
    ('admin', 'admin123'),
    ('user', 'pass123')
");

echo "✅ Datenbank wurde erstellt und mit Testdaten befüllt.";
