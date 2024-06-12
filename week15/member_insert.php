<?php
  $id = $_POST["id"];
  $pass = $_POST["pass"];
  $name = $_POST["name"];
  $email1 = $_POST["email1"];
  $email2 = $_POST["email2"];

	$email = $email1 . "@" . $email2;
	$regist_day = date("Y-m-d (H:i)");

	$conn = mysqli_connect("localhost:33306", "root", "", "sample");
	mysqli_query($conn, 
		"INSERT INTO members(id, pass, name, email, regist_day, level, point) VALUES('$id', '$pass', '$name', '$email', '$regist_day', 9, 0)");
	mysqli_close($conn);

	echo "<script>location.href='/'</script>";
?>