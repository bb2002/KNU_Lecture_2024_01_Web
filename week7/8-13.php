<?php
    function my_print() {
        $argnum = func_num_args();
        $args = func_get_args();

        foreach ($args as $arg) {
            print "파라미터: $arg<br />";
        }
        echo "<br />";

        if ($argnum >= 2) {
            echo "두 번째 인자: " . func_get_arg(1) . "\n";
        }
    }

    my_print("Apple", "Orange", "Pear", "Banana", "Cherry", "Peach");
?>