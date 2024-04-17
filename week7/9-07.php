<?php
    $twod_array = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9),
    );
    $dim = 1;

    foreach ($twod_array as $oned_array) {
        print "dimension(" . $dim++ . ") ";

        foreach($oned_array as $element) {
            print $element . " ";
        }

        print "<br />";
    }

    for ($i = 0; $i < 3; $i ++) {
        print "dimension(" . ($i + 1) . ") ";
        for ($j = 0; $j < 3; $j++) {
            print $twod_array[$i][$j] . " ";
        }
        print "<br />";
    }

?>