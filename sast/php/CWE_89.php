<?php
  $msg_id = $_COOKIE["message_id"];
  $sql = "SELECT MessageID, Subject FROM messages WHERE MessageID = '$msg_id'";
  mysqli_query($sql);
?>
