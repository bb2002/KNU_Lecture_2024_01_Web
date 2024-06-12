<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<title>PHP 사이트 만들기</title>
	<link rel="stylesheet" type="text/css" href="./css/common.css">
	<link rel="stylesheet" type="text/css" href="./css/member.css">
	<script src="./js/member.js"> </script>
</head>
<body> 
<header><?php include "header.php";?></header>
<section>
<div id="main_img_bar"><img src="./img/main_img.png"></div>
<div id="main_content">
	<div id="join_box">
    <form  name="member_form" method="post" action="member_insert.php">
		<h2>회원 가입</h2>
    	<div class="form id">
			<div class="col1">아이디</div>
			<div class="col2"><input type="text" name="id"></div>  
			<div class="col3"><a href="#">
				<img src="./img/check_id.gif" onclick="check_id()"></a>
			</div>                 
		</div>
		<div class="clear"></div>
		<div class="form">
			<div class="col1">비밀번호</div>
			<div class="col2"><input type="password" name="pass"></div>                 
		</div>
		<div class="clear"></div>
		<div class="form">
			<div class="col1">비밀번호 확인</div>
			<div class="col2"><input type="password" name="pass_confirm"></div>                 
		</div>
		<div class="clear"></div>
		<div class="form">
			<div class="col1">이름</div>
			<div class="col2"><input type="text" name="name"></div>                 
		</div>
		<div class="clear"></div>
		<div class="form email">
			<div class="col1">이메일</div>
			<div class="col2">
				<input type="text" name="email1">@<input type="text" name="email2"></div>                 
		</div>
		<div class="clear"></div>
		<div class="bottom_line"></div>
			<div class="buttons">
	        	<img style="cursor:pointer" src="./img/button_save.gif" onclick="check_input()">
				&nbsp;<img id="reset_button" style="cursor:pointer" src="./img/button_reset.gif"
                  			onclick="reset_form()">
	        </div>
    </form>
    </div>
</div>
</section> 
<footer><?php include "footer.php";?></footer>
</body>
</html>

