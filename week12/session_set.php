<?php
    session_start();
    echo "세션 시작!!<br />";

    $_SESSION['userid'] = "test";
    $_SESSION['username'] = "테스트";
    echo "세션 등록 완료!<br />";

    echo $_SESSION['userid'] . "<br />";
    echo $_SESSION['username'] . "<br />";
?>