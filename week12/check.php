<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $num = count($_POST["hobby"]);

        for ($i = 0; $i < $num; ++$i) {
            echo $_POST["hobby"][$i];

            if ($i != $num - 1) {
                echo ", ";
            }
        }
    ?>
</body>
</html>