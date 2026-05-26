<?php
  $username = $_GET['username'];
  system("ping -c 1 " . $username);
?>
