<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ballbot's PHP Site</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/board.css">
</head>
<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <section>
        <div id="main_img_bar"><img src="./img/main_img.png"></div>
        <div id="board_box"><h3 class="title">게시판 > 내용보기</h3>
        <?php 
            $num = $_GET["num"];
            $page = $_GET["page"];

            $conn = mysqli_connect("localhost:33306", "root", "", "sample");
            $result = mysqli_query($conn, "SELECT * FROM board WHERE num = '$num'");
            $row = mysqli_fetch_array($result);
            
            $id = $row["id"];
            $name = $row["name"];
            $regist_day = $row["regist_day"];
            $subject = $row["subject"];
            $content = $row["content"];
            $file_name = $row["file_name"];
            $file_type = $row["file_type"];
            $file_copied = $row["file_copied"];
            $hit = $row["hit"];

            $content = str_replace(" ", "&nbsp;", $content);
            $content = str_replace("\n", "<br />", $content);
            $new_hit = $hit + 1;

            mysqli_query($conn, "UPDATE board SET hit = '$new_hit' WHERE num = '$num'");
        ?>
        <ul id="view_content">
            <li>
                <span class="col1"><b>제목: </b> <?=$subject ?></span>
                <span class="col2"><?=$name?> | <?=$regist_day ?></span>
            </li>
            <li>
                <?php
                    $real_name = $file_copied;
                    $file_path = "./data/" . $real_name;
                    $file_size = filesize($file_path);

                    echo "> 첨부파일: $file_name ($file_size Bytes)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href='board_download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a><br /><br />";
                ?>
                <?=$content ?></li>
            </li>
        </ul>
        <ul class="buttons">
            <li>
                <button onclick="location.href='board_list.php?page=<?=$page ?>'">목록</button>
            </li>
            <li>
                <button onclick="location.href='board_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button>
            </li>
            <li>
                <button onclick="location.href='board_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button>
            </li>
            <li>
                <button onclick="location.href='board_form.php'">글쓰기</button>
            </li>
        </ul>
    </div>
</section>
<footer>
    <?php include "footer.php"; ?>
</footer>
</body>
</html>