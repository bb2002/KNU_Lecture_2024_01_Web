<?php
    $score = array(90, 80, 85, 95, 93);
    $sum = 0;

    for ($a = 0; $a < 5; $a++) {
        $sum += $score[$a];
    }
    $avg = $sum / 5;

    echo "과목 점수: $score[0], $score[1], $score[2], $score[3], $score[4]<br />";
    echo "합계: $sum, 평균: $avg<br />";
?>