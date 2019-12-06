<?php

function calculator($a, $op, $c)
{
    if ($op == '-') {
        return $a - $c;
    } elseif ($op == '+') {
        return $a + $c;
    } elseif ($op == '*') {
        return $a * $c;
    } elseif ($op == '/' && $a !== '0' && $c !== '0') {
        return $a / $c;
    }
}

