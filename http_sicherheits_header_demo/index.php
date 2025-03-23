<?php
// Sicherheits-Header setzen
header("Content-Security-Policy: default-src 'self'; script-src 'self'");
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: DENY");
header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
header("Referrer-Policy: no-referrer-when-downgrade");
header("Permissions-Policy: geolocation=(), microphone=()");
header("Cross-Origin-Resource-Policy: same-origin");
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>HTTP Sicherheits-Header Demo</title>
</head>
<body>
    <h1>HTTP-Sicherheits-Header aktiv</h1>
    <p>Diese Seite setzt mehrere Sicherheits-Header, die du in den Entwicklertools (F12 > Netzwerk > Header) einsehen kannst.</p>
    <ul>
        <li><strong>Content-Security-Policy</strong>: Verhindert das Laden von Inhalten/Skripten von anderen Quellen.</li>
        <li><strong>X-Content-Type-Options</strong>: Erzwingt korrekte MIME-Typen, verhindert MIME Sniffing.</li>
        <li><strong>X-Frame-Options</strong>: Verhindert Einbettung in iFrames (Schutz vor Clickjacking).</li>
        <li><strong>Strict-Transport-Security</strong>: Erzwingt HTTPS für zukünftige Besuche.</li>
        <li><strong>Referrer-Policy</strong>: Kontrolliert, ob und wie der Referrer-Header gesendet wird.</li>
        <li><strong>Permissions-Policy</strong>: Verhindert Zugriff auf z. B. Mikrofon oder Geolocation.</li>
        <li><strong>Cross-Origin-Resource-Policy</strong>: Verhindert das Laden von Ressourcen durch andere Seiten.</li>
    </ul>
</body>
</html>
