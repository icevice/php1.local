<?php
function guess($name, $dbm, $dbw)
{
    //применение строковых функций.
    $name = strtolower($name);
    $dbm = array_map('strtolower', $dbm);
    $dbw = array_map('strtolower', $dbw);


    if (in_array($name, $dbm)) {
        return 'это мужское имя';
    } elseif (in_array($name, $dbw)) {
        return 'это женское имя';
    } else {
        return null;
    }
}

assert('это мужское имя' == guess('саша', ['саша', 'петя'], ['Роза', 'Яна']));
assert('это женское имя' == guess('Роза', ['саша', 'петя'], ['Роза', 'Яна']));
assert(null == guess('Ссср', ['саша', 'петя'], ['Роза', 'Яна']));