<?php
$baseDir = realpath(__DIR__ . "/files");
$filename = $_GET['file'] ?? '';
$fullPath = realpath($baseDir . '/' . $filename);

// Pfadprüfung
if (
    $fullPath !== false &&
    str_starts_with($fullPath, $baseDir) &&
    is_file($fullPath) &&
    pathinfo($fullPath, PATHINFO_EXTENSION) === 'txt'
) {
    header("Content-Type: text/plain");
    readfile($fullPath);
} else {
    http_response_code(403);
    echo "Zugriff verweigert oder Datei nicht gefunden.";
}
?>
