<?php
	include 'connect.php';

	header("Access-Control-Allow-Origin: *");

	$username = $_POST['username'];
	$password = $_POST['password'];
	$browser = $_POST['browser'];
	date_default_timezone_set('Asia/Jakarta');
	$logintime = substr(date("h:i:sa"),0,2).substr(date("h:i:sa"),3,2).substr(date("h:i:sa"),6,2);
	$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
	$result = $conn->query($sql)->fetch_assoc();

	if (count($result) > 0) {
		$update = "UPDATE user SET login_time = '$logintime', login_state = 'login', browser = '$browser' WHERE username = '$username'";
		$resultUpdate = $conn->query($update);

		echo "Sukses";
	} else {
		echo "Username atau password salah";
	}
		
	$conn->close();
?>