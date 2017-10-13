<?php
	include '../connection.php';
	$get = $_GET['id'];
	$query = "DELETE FROM tabungan WHERE id = '$get'";
	$conn->query($query);
	header("location:../tabungan.php?m=delete-success");
?>