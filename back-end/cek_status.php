<?php
	include 'connect.php';

	header("Access-Control-Allow-Origin: *");

	$browser = $_POST['browser'];
	$username = $_POST['username'];

	$sql = "SELECT * FROM user WHERE username = '$username'";
	$result = $conn->query($sql)->fetch_assoc();

	if (count($result) > 0) {
		if ($result['browser'] == $browser)
		{
			$arr = array();

			$arr['username'] = addslashes(htmlentities($result['username']));
			$arr['login_time'] = addslashes(htmlentities($result['login_time']));
			$arr['login_state'] = addslashes(htmlentities($result['login_state']));

			echo json_encode($arr);
		}
		else
		{
			echo "gagal";
		}
	} else {
		echo "gagal";
	}
		
	$conn->close();
?>