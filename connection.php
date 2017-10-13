<?php
  $servername = 'localhost';
  $username = 'root';
  $password = 'qwerty123';
  $db = 'tabunganku';

  $conn = new mysqli($servername, $username, $password, $db);
  if ($conn->connect_error) {
    die('Connection Refuse');
  }


?>
