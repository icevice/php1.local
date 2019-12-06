<?php


function discriminant($a, $b, $c)
{
    return $b ** 2 - 4 * $a * $c;
}


assert(0 === discriminant(0, 0, 0));
assert(20 === discriminant(4, 6, 1));
assert(352 === discriminant(11, 22, 3));