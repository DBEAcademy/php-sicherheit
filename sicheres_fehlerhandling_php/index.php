<?php
// Fehler nicht anzeigen (für Produktion)
ini_set('display_errors', 0);
ini_set('log_errors', 1);
error_reporting(E_ALL);

// Fehlerbehandlung mit try-catch
try {
    require_once 'db.php';

    // Simulierter Datenbank-Zugriff
    $result = $db->query("SELECT * FROM users");

    echo "<h2>Benutzerliste</h2>";
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "Benutzer: " . htmlspecialchars($row['username']) . "<br>";
    }

} catch (Exception $e) {
    // Fehler intern protokollieren
    error_log("Fehler auf index.php: " . $e->getMessage());

    // Allgemeine Fehlermeldung für den Benutzer
    http_response_code(500);
    echo "Ein Fehler ist aufgetreten. Bitte versuchen Sie es später erneut.";
}
?>