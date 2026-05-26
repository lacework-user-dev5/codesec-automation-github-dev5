<?php
session_set_cookie_params([
    'lifetime' => 3600,
    'secure' => false,
    'httponly' => true,
    'samesite' => 'Strict'
]);
session_start();
?>
