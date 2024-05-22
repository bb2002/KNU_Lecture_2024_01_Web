<?php
    echo "<h3>입력된 정보를 POST 방식으로 브라우저에 출력</h3>";
    echo "<hr />";
    echo " o 아이디: {$_POST['id']} <br />";
    echo " o 성명: {$_POST['name']} <br />";
    echo "<hr />";
    echo " o 비밀번호: {$_POST['pw1']} <br />";
    echo " o 비밀번호확인: {$_POST['pw2']} <br />";
    echo "<hr />";
    echo " o 성별: {$_POST['sex']} <br />";
    echo "<hr />";
    echo " o 핸드폰: {$_POST['p1']} - {$_POST['p2']} - {$_POST['p3']} <br />";
    echo " o 주소: {$_POST['addr']} <br />";
    echo "<hr />";
    echo " o 남기고 싶은 글: {$_POST['memo']} <br />";
    echo " o 숨긴내용: {$_POST['thema']} <br />";
    echo "<hr />";
    echo "회원정보 출력 완료!";
?>