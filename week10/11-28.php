<?php
    $filep = fopen("./exam.txt", "a");
    if (!$filep) {
        die ("파일을 열 수 없습니다.");
    }

    fwrite($filep, "1 2 3 4 5 6 7 8 9 0\n");
    fclose($filep);

    $filep = fopen("./exam.txt", "r");
    while ($line = fread($filep, 20)) {
        print $line . "<br />";
    }

    fclose($filep);
?>