<?php
    $start = mktime(11, 00, 00, 4, 30, 2024);
    $startday = date('Y-m-d일 H:i:s부터', $start);
    $end = mktime(23,59,59,12,31,2024);
    $endday = date('Y-m-d일 H:i:s까지', $end);

    $count = $end - $start;
    $total1 = intval($count / 86400);
    $total2 = intval(($count % 86400) / 3600);

    echo "<hr />";
    echo "<h3>기준일: {$startday} </h3>";
    echo "<hr />";
    echo "<h3>D-DAY: {$endday} </h3>";
    echo "<hr />";
    echo " >> 기준일부터 종료일까지 <b>{$count}초</b>가 남았으며, <br />";
    echo " >> 날짜로 환산하면 <b>{$total1}일 {$total2}시간</b> 남았습니다.<br />";
?>