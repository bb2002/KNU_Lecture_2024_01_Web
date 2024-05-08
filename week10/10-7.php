<?php
    function swap(&$a, &$b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    $i = 3; $j = 4;
    print "before swap = $i, $j" . "<br />";
    swap($i, $j);
    print "after swap = $i, $j" . "<br />";
?>