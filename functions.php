<?php
function isEmpty($str) {
    $check = trim($str);
    return (empty($check) && strlen($check) == 0) ? true : false;
}

function isValidEmail($string) {
    $validate = preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $string);
    return (!$validate) ? true : false;
}
?>