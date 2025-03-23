<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Timeout prüfen
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > 1800) {
    session_unset();
    session_destroy();
    header("Location: login.php?timeout=1");
    exit;
}
$_SESSION['last_activity'] = time();

echo "<h1>Willkommen, " . htmlspecialchars($_SESSION['username']) . "!</h1>";
echo "<p><a href='logout.php'>Logout</a></p>";
?>
