<?php
    $num = $_GET["num"];
    $page = $_GET["page"];

    $conn = mysqli_connect("localhost:33306", "root", "", "sample");
    $result = mysqli_query($conn, "SELECT * FROM board WHERE num = '$num'");
    $row = mysqli_fetch_array($result);

    $copied_name = $row["file_copied"];

    if ($copied_name) {
        $file_path = "./data/" . $copied_name;
        unlink($file_path);
    }

    mysqli_query($conn, "DELETE FROM board WHERE num = '$num'");
    mysqli_close($conn);

    echo "<script>location.href='board_list.php?page=$page';</script>";
?>