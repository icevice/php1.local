<?php

function save($line)
{
    $a = fopen(__DIR__ . '/../db/text.txt', 'a');
    fwrite($a, $line . PHP_EOL);
    fclose($a);
}