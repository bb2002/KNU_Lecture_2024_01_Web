<?php
$a = setcookie("userid", "sample");
$b = setcookie("username", "김샘플", time() + 60);

if ($a and $b) {
    echo "쿠기 'userid'와 'username' 생성 성공!<br />";
    echo "쿠키 'username' 은 60초(1분)간 지속됨";
}
?>