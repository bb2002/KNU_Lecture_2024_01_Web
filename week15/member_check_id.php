<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디 확인</title>
</head>
<body>
	<h3>아이디 중복체크</h3>
	<p>
  <?php
		$id = $_GET["id"];

		if(!$id) {
			echo "<li>아이디를 입력해주세요</li>";
		} else {
			$conn = mysqli_connect("localhost:33306", "root", "", "sample");
			$result = mysqli_query($conn, "SELECT * FROM members WHERE id = '$id'");
			$num_record = mysqli_num_rows($result);

			if ($num_record) {
				echo "<li>{$id}는 중복됩니다.</li>";
				echo "<li>다른 아이디를 이용해주세요.</li>";
			} else {
				echo "<li>{$id}는 사용 가능합니다.</li>";
			}
			mysqli_close($conn);
		}
	?>
	</p>
	<div id="close">
		<img src="./img/close.png" onclick="javascript:self.close()" />
	</div>
</body>
</html>