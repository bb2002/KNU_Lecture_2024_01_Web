<?php
	$id = $_GET["id"];
	$pass = $_POST["pass"];
	$name = $_POST["name"];
	$email1 = $_POST["email1"];
	$email2 = $_POST["email2"];
	$email = $email1 . "@" . $email2;

	$conn = mysqli_connect("localhost:33306", "root", "", "sample");
	mysqli_query($conn, "UPDATE members SET pass='$pass', name='$name', email='$email' WHERE id='$id'");
	mysqli_close($conn);

	echo "<script>location.href='/';</script>";
?>