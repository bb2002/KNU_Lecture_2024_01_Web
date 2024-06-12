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

    if (isset($_POST["item"])) {
        $num_item = count($_POST["item"]);
    } else {
        echo "<script>alert('삭제할 글을 선택하세요.'); history.go(-1);</script>";
        exit;
    }

    $conn = mysqli_connect("localhost:33306", "root", "", "sample");
    for ($i = 0; $i < count($_POST["item"]); ++$i) {
        $num = $_POST["item"][$i];
        $result = mysqli_query($conn, "SELECT * FROM board WHERE num = '$num'");
        $row = mysqli_fetch_array($result);
        $copied_name = $row["file_copied"];
        if ($copied_name) {
            $file_path = "./data/" . $copied_name;
            unlink($file_path);
        } 

        mysqli_query($conn, "DELETE FROM board WHERE num = '$num'");
    }

    mysqli_close($conn);
    echo "<script>location.href='admin.php';</script>"
?>