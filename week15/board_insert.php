<?php
    session_start();
    if (isset($_SESSION["userid"])) {
        $userid = $_SESSION["userid"];
    } else {
        $userid = "";
    }

    if (isset($_SESSION["username"])) {
        $username = $_SESSION["username"];
    } else {
        $username = "";
    }

    if (!$userid) {
        echo "<script>alert('게시판 글쓰기는 로그인 후 이용해주세요.'); history.go(-1); </script>";
        exit;
    }

    $subject = $_POST["subject"];
    $content = $_POST["content"];
    $subject = htmlspecialchars($subject, ENT_QUOTES);
    $content = htmlspecialchars($content, ENT_QUOTES);
    $regist_day = date("Y-m-d (H:i)");

    $upload_dir = "./data/";
    $upfile_name = $_FILES["upfile"]["name"];
    $upfile_tmp_name = $_FILES["upfile"]["tmp_name"];
    $upfile_type = $_FILES["upfile"]["type"];
    $upfile_size = $_FILES["upfile"]["size"];
    $upfile_error = $_FILES["upfile"]["error"];

    if ($upfile_name && !$upfile_error) {
        $file = explode(".", $upfile_name);
        $file_name = $file[0];
        $file_ext = $file[1];
        $new_file_name = date("Y_m_d_H_i_s");
        $copied_file_name = $new_file_name . "." . $file_ext;
        $uploaded_file = $upload_dir . $copied_file_name;

        if ($upfile_size > 1000000) {
            echo "<script>alert('파일 크기가 1MB 를 초과했습니다.'); history.go(-1);</script>";
            exit;
        }

        if (!move_uploaded_file($upfile_tmp_name, $uploaded_file)) {
            echo "<script>alert('Internal server error.'); history.go(-1);</script>";
            exit;
        }
    } else {
        $upfile_name = "";
        $upfile_type = "";
        $copied_file_name = "";
    }

    $conn = mysqli_connect("localhost:33306", "root", "");
    mysqli_query($conn, "INSERT INTO sample.board (id, name, subject, content, regist_day, hit, file_name, file_type, file_copied) VALUES('$userid', '$username', '$subject', '$content', '$regist_day', 0, '$upfile_name', '$upfile_type', '$copied_file_name');");

    $point_up = 100;
    $result = mysqli_query($conn, "SELECT point FROM sample.members WHERE id = '$userid'");
    $row = mysqli_fetch_array($result);
    $new_point = $row["point"] + $point_up;
    mysqli_query($conn, "UPDATE sample.members SET point = '$new_point' WHERE id = '$userid';");

    mysqli_close($conn);
    echo "<script>location.href = 'board_list.php';</script>";
?>