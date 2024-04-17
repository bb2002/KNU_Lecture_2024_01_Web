<?php
$fruit = array(
    "Apple" => "Red", 
    "Pear" => array("Brown", "Yellow"),
    "Peach" => "Pink",
    "Tomato" => array("Red", "Green"),
    "Banana" => "Yellow"  
);


print("**** BEFORE ****<br />");
var_dump($fruit);
print "<br /><br />";

unset($fruit["Pear"], $fruit["Banana"]);
print("**** AFTER *****<br />");
var_dump($fruit);
?>