<?php
function print_fr($arr_var) {
    foreach ($arr_var as $arr_item) {
        if (is_array($arr_item)) {
            print_fr($arr_item);
        } else {
            print "Color = " . $arr_item . "<br />";
        }
    }
}

function print_fruit($arr_var) {
    foreach ($arr_var as $arr_item => $arr_list) {
        print "Fruit: " . $arr_item . "<br />";
        if (is_array($arr_list)) {
            print_fr($arr_list);
        } else {
            print "Color = " . $arr_list . "<br />";
        }
        print("=-=-=-=-=-=-=-=-=-=-=-=-=-= <br />");
    }

}

$fruit1 = array(
    "Apple" => "Red",
    "Tomato" => array("Red", "Green"),
    "Pear" => array("Brown", "Yellow"),
    "Peach" => "Pink",
    "Banana" => "Yellow"  
);

$fruit2 = array(
    "Apple" => "Red",
    "Tomato" => array("Red", "Green"),
    "Pear" => array("Brown", "Yellow"),
    "Peach" => "Pink",
    "Banana" => "Yellow"
);

$fruit3 = array(
    "Apple" => "Red",
    "Tomato" => array("Red", "Green"),
    "Pear" => array("Brwon", "Yellow"),
    "Peach" => "Pink",
    "Banana" => "Yellow"  
);

print "<table border='1'><tr>";
print "<td><b>******* ORIGINAL *******</b><br /><br />";
print_fruit($fruit1);
print "<br /><br /></td>";

print "<td><b>******* SORT *******</b><br /><br />";
sort($fruit1);
print_fruit($fruit1);
print "<br /><br /></td>";

print "<td><b>******* ASORT *******</b><br /><br />";
asort($fruit2);
print_fruit($fruit2);
print "<br /><br /></td>";

print "<td><b>******* KSORT *******</b><br /><br />";
ksort($fruit3);
print_fruit($fruit3);
print "<br /><br /></td>";

print("</tr></table>");
?>