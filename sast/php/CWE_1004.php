<?php
session_set_cookie_params([
    'lifetime' => 3600,
    'secure' => true,
    'httponly' => false,
    'samesite' => 'Strict'
]);
session_start();
?>
