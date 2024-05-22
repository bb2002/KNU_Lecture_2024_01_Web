<?php
    session_start();
    unset($_SESSION['username']);

    echo "세션 userid : " . $_SESSION["userid"] . "<br />";
    echo "세션 username : " . $_SESSION["username"] . "<br />";
    echo "<hr />세션의 username 이 삭제되었습니다.";
?>