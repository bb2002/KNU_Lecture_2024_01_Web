<?php
$samples = array(
    "sample1.php", "sample11.php", "sample21.php", 
    "sample2.php", "sample12.php", "sample22.php", 
    "sample3.php", "sample13.php", "sample23.php"
);

function print_samples($sams) {
    $i = 0;
    foreach ($sams as $sam) {
        print $sam . " " . "<br />";
    }
    print "<br />";
}

print "Initial: <br />";
print_samples($samples);

sort($samples);
print "sort(): <br />";
print_samples($samples);

natsort($samples);
print "natsort(): <br />";
print_samples($samples);
?>