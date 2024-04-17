<?php
    $a = 3;
    $b = 5;
    $c = $a + $b;
    echo "Line 5 \$c => $c<br />";

    $c++;
    echo "Line 8 \$c => $c<br />";

    $c = $c + $a;
    $d = $a + $c * $b;

    echo "Line 13 \$c => $c<br />";
    echo "\$d : $d";
    echo "<br />";

    $a = 10;
    $b = $a % 3;
    echo "Line 19 \$b => $b<br />";
    $b--;
    echo "Line 21 \$b => $b<br />";
    
    $c = $a - $b;
    $c = $c - 5;
    echo "\$c : $c";
?>