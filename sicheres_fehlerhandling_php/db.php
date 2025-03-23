<?php
// Datenbankverbindung mit PDO
try {
    $db = new PDO('mysql:host=localhost;dbname=testdb', 'user', 'pass');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log("DB-Verbindungsfehler: " . $e->getMessage());
    throw new Exception("Datenbank derzeit nicht verfügbar.");
}
?>