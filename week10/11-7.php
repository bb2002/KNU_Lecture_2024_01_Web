<?php
    $a = "오늘은 어제 죽어간 이가 그토록 기다리던 내일이다.";
    $b = "Have a good time.";

    echo " >> 문장 1: $a <br />";
    echo " >> 문장 2: $b <br />";
    echo "<hr />";

    $str[0] = substr($a, 3);
    $str[1] = substr($a, 6, 10);
    $str[2] = substr($a, -10);
    $str[3] = substr($a, -17, 10);
    $str[4] = substr($b, 4);
    $str[5] = substr($b, 5, 6);
    $str[6] = substr($b, -10, 4);

    for ($a = 0; $a <= 6; ++$a) {
        echo "문자열[$a] ... " . $str[$a] . "<br />";
    }
    echo "<hr />";
?>