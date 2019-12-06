<?php
	$hostname="localhost";
	$username = "id11849636_root";
	$password = "123456";
	$databasename = "id11849636_musicapp";

	$conn = mysqli_connect($hostname, $username, $password, $databasename);
	if($conn) {
		echo "Success";
	} else {
		echo "error";
	}

	mysqli_query($conn, "SET NAMES 'utf8'");
?>