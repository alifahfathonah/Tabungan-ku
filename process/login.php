<?php
  include '../connection.php';
  session_start();

  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $sql = $conn->query("SELECT * FROM admin WHERE username = '$username' && password = '$password'");
  if ($sql->num_rows > 0) {
    $data = $sql->fetch_assoc();
    $_SESSION['username'] = $data['username'];
    header("location:../index.php");
  } else {
    header("location:../login.php?m=fail");
  }
 ?>
