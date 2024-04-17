<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>02.php</title>
</head>
<body>
    <h3>
    <?php
        echo "고양이와 토끼";
    ?>
    </h3>

    <?php
        $filename = "cat.png";
        echo "<img src='cat.png' />";
        echo "<br />";

        $filename = "rabit.jpg";
        echo "<img src='rabit.jpg' />";
    ?>
</body>
</html>