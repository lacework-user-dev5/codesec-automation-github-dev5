<?php
session_start();
if ($_POST['username'] == 'admin') {
    echo "Successfully logged in";
} else {
    echo "Access denied";
}
?>
