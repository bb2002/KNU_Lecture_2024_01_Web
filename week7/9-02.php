<?php
// $dow = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
// $coins = arary(,1,5,10,50,100,500);

    $arr1 = array("A", "B", "C", "D", "E", "F", "G");
    $arr2 = array("A", "B", "D", "E", "F", "G", "H");

    $results = array_diff($arr1, $arr2);

    foreach ($results as $value) {
        print "$value<br />";
    }
?>