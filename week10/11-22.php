<?php
    echo "<hr />";
    echo "1. 가위<br />";
    echo "2. 바위<br />";
    echo "3. 보<br />";
    echo "<hr />";
    echo " >> 랜덤하게 가위 바위 보!<br />";

    $a = mt_rand(1, 3);

    switch ($a) {
        case 1:
            echo "\"가위\"가 선택되었습니다.";
            break;
        case 2:
            echo "\"바위\"가 선택되었습니다.";
            break;
        case 3:
            echo "\"보\"가 선택되었습니다.";
            break;
    }
    
?>