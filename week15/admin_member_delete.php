<?php
    session_start();
    if (isset($_SESSION["userlevel"])) {
        $userlevel = $_SESSION["userlevel"];
    } else {
        $userlevel = "";
    }

    if ($userlevel != 1) {
        echo "<script> alert('관리자가 아닙니다.'); history.go(-1);</script>";
        exit;
    }

    $num = $_GET["num"];
    $conn = mysqli_connect("localhost:33306", "root", "", "sample");
    mysqli_query($conn, "DELETE FROM members WHERE num = '$num'");
    mysqli_close($conn);

    echo "<script>location.href='admin.php'</script>";
?>