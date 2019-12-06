
<?php
require_once __DIR__ . '/fun/guess.php';

$name = 'Агита'; // вводим имя которое хотим угадать
$dbm = file(__DIR__ . '/db/dbman.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); // база мужских имен
$dbw = file(__DIR__ . '/db/dbwomen.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); // база женских имен

echo $res = guess($name, $dbm, $dbw);

