<?php
require 'vendor/autoload.php';
use Firebase\JWT\JWT;

$jwt = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI3MmU4ZjNlIiwicm9sZSI6InVzZXIiLCJpYXQiOjE3MjE0NTM4OTAsImV4cCI6MTcyMTQ1Nz';
$auth = JWT::decode($jwt, new Firebase\JWT\Key('', 'none'));

if ($auth->sub === 'admin') {
    echo "Logged in success"
}
?>
