<?php
    $num = $_GET["num"];
    $page = $_GET["page"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];

    $conn = mysqli_connect("localhost:33306", "root", "", "sample");
    mysqli_query($conn, "UPDATE board SET subject='$subject', content='$content' WHERE num='$num'");
    mysqli_close($conn);

    echo "<script>location.href='board_list.php?page=$page';</script>";
?>