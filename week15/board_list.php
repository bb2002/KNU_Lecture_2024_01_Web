<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<title>PHP 사이트 만들기</title>
	<link rel="stylesheet" type="text/css" href="./css/common.css">
	<link rel="stylesheet" type="text/css" href="./css/board.css">
</head>
<body> 
<header><?php include "header.php";?></header>  
<section>
	<div id="main_img_bar"><img src="./img/main_img.png"></div>
   	<div id="board_box"><h3>게시판 > 목록보기</h3>
	    <ul id="board_list">
			<li><span class="col1">번호</span>
				<span class="col2">제목</span>
				<span class="col3">글쓴이</span>
				<span class="col4">첨부</span>
				<span class="col5">등록일</span>
				<span class="col6">조회</span></li>
<?php
if (isset($_GET["page"]))
	$page = $_GET["page"];
else
	$page = 1;

$conn = mysqli_connect("localhost:33306", "root", "");
$result = mysqli_query($conn, "SELECT * FROM sample.board ORDER BY num DESC");
$total_record = mysqli_num_rows($result);
$scale = 10;

if ($total_record % $scale == 0) {
	$total_page = floor($total_record / $scale);
} else {
	$total_page  = floor($total_record / $scale) + 1;
}

$start = ($page - 1) * $scale;
$number = $total_record - $start;

for ($i = $start; $i < $start + $scale && $i < $total_record; $i++) {
	mysqli_data_seek($result, $i);
	$row = mysqli_fetch_array($result);
	$num = $row["num"];
	$id = $row["id"];
	$name = $row["name"];
	$subject = $row["subject"];
	$regist_day = $row["regist_day"];
	$hit = $row["hit"];

	if ($row["file_name"]) {
		$file_image = "<img src='./img/file.gif' />";
	} else {
		$file_image = "";
	}
	?>
	<li><span class="col1"><?=$number?></span>
		<span class="col2"><a href="board_view.php?num=<?=$num?>&page=<?=$page?>">
			<?=$subject?></a></span>
		<span class="col3"><?=$name?></span>
		<span class="col4"><?=$file_image?></span>
		<span class="col5"><?=$regist_day?></span>
		<span class="col6"><?=$hit?></span>
	</li>	
<?php
	$number--;
}

mysqli_close($conn);
?>
		</ul>
		<ul id="page_num"> 	
<?php
if ($total_page>=2 && $page >= 2) {
	$new_page = $page-1;
	echo "<li><a href='board_list.php?page=$new_page'>◀ 이전</a> </li>";
} else 
	echo "<li>&nbsp;</li>";

	for ($i=1; $i<=$total_page; $i++) { // 게시판 목록 하단 페이지 번호
	if ($page == $i) // 현재 페이지 번호 링크 해지
		echo "<li><b> $i </b></li>";
	else
		echo "<li><a href='board_list.php?page=$i'> $i </a><li>";
}
if ($total_page>=2 && $page != $total_page) {
	$new_page = $page+1;	
	echo "<li> <a href='board_list.php?page=$new_page'>다음 ▶</a> </li>";
} 
else 
	echo "<li>&nbsp;</li>";
?>
		</ul> <!-- page -->	    	
		<ul class="buttons">
			<li><button onclick="location.href='board_list.php'">목록</button></li>
			<li>
<?php if($userid) { ?>
				<button onclick="location.href='board_form.php'">글쓰기</button>
<?php } else { ?>
				<a href="javascript:alert('로그인 후 이용해 주세요!')"><button>글쓰기</button></a>
<?php } ?>
			</li>
		</ul>
	</div>
</section> 
<footer> <?php include "footer.php";?> </footer>
</body>
</html>