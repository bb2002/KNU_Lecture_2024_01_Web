<?php
    session_start();
    echo "session_id(): ". session_id();
    $userid = $_SESSION['userid'];
    $username = $_SESSION['username'];
?>

<html>
    <head></head>
    <body>
        <h3>등록된 세션의 확인과 사용</h3>
        <ul>
            <li>등록된 세션 (userid) : <?=$userid ?></li>
            <li>등록된 세션 (username) : <?=$username ?></li>
        </ul>
    </body>
</html>