<?php
    $pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
    $pieces = explode(" ", $pizza);
    echo $pieces[0] . "<br />";
    echo $pieces[1] . "<br />";

    $data = "simple:*:1023:1000::/home/exe:/bin/sh";
    list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);

    echo $user . "<br />";
    echo $pass;
?>