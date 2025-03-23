<?php
// csrf.php
session_start();

class CSRF {
    public static function generateToken($formName) {
        $token = bin2hex(random_bytes(32));
        $_SESSION['csrf_tokens'][$formName] = $token;
        return $token;
    }

    public static function getTokenInput($formName) {
        $token = self::generateToken($formName);
        return '<input type="hidden" name="csrf_token" value="' . htmlspecialchars($token) . '">';
    }

    public static function validateToken($formName, $token) {
        if (!isset($_SESSION['csrf_tokens'][$formName])) {
            return false;
        }

        $valid = hash_equals($_SESSION['csrf_tokens'][$formName], $token);

        // Token nur einmal gültig machen (optional)
        unset($_SESSION['csrf_tokens'][$formName]);

        return $valid;
    }
}
