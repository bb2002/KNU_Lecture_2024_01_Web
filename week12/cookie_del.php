<?php
    setcookie('userid', "", time() - 3600);
    setcookie('username', "", time() - 3600);

    $userid = $_COOKIE["userid"];
    $username = $_COOKIE["username"];

    echo "userid 쿠키: " . $userid . "<br />";
    echo "username 쿠키: " . $username . "<br />";
    echo "<hr />";
    echo "쿠키삭제완료!";
?>