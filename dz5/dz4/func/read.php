<?php

function read()
{
    return $data[] = file(__DIR__ . '/../db/text.txt', FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
}

