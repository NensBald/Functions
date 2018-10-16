<?php

function isEmpty($s) {
        $c = trim($s);
        return (empty($c) && strlen($c) == 0) ? true : false;
}

function isValidEmail($s) {
        $v = preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $s);
        return (!$v) ? true : false;
}

function isInt($n) {
        return (!filter_var($n, FILTER_VALIDATE_INT) === false) ? true : false;
}

function isIP($ip) {
        return (!filter_var($ip, FILTER_VALIDATE_IP) === false) ? true : false;
}

?>