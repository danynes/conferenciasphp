<?php
  $conn = new mysqli('localhost', 'root', 'root', 'web_cancun');
  if ($conn->connect_error) {
    echo $error -> $conn->connect_error;
  }
?>
