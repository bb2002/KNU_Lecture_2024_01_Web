<?php
    $id = "하늘에서정의가#3194";
    echo " >> 신청한 ID ... <b> \"{$id}\" </b> <br />";
    echo "<hr />";

    if (preg_match("/^[A-Za-z0-9!@#$%^&*()_+-=]+$/", $id)) {
        echo " >> 신청한 아이디 [{$id}]은(는) 사용 할 수 있는 ID 입니다.<br />";
    } else {
        echo " >> 신청한 아이디 [{$id}]은(는) 지원하지 않는 형식 입니다.<br />";
        echo " 아이디는 대/소문자 알파벳, 숫자, 특문으로 이뤄져야 합니다.<br />";
    }

    echo "<hr />"

?>