<?php
	header("Access-Control-Allow-Origin: *");
	include 'connect.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sqlUser = "INSERT INTO user (username, password) VALUES ('".$username."', '".$password."')";
	if ($conn->query($sqlUser) === TRUE)
	{
		echo "Sukses";
	}
	else
	{
		echo "Gagal Registrasi";
	}

	$conn->close();
?>