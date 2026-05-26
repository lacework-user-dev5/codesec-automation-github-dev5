<?php
use Lcobucci\JWT\Configuration;
require 'vendor/autoload.php';

$config = Configuration::forUnsecuredSigner();
$auth = $config->parser()->parse($_GET['token']);

if ($auth->claims()->get('user') === 'admin') {
    echo "Logged in success"
}
?>
