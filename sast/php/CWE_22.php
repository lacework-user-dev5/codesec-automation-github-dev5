<?php
  $path = "downloads/" . $_GET['file'];
  if (file_exists($path)) {
      echo file_get_contents($path);
  } else {
      echo "File not found";
  }
?>
