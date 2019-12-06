<?php

require_once __DIR__ . '/func.php';

$a = $_GET['x'] ?? 0;
$op = $_GET['op'] ?? 0;
$c = $_GET['y'] ?? 0;

$result = calculator($a, $op, $c);

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>калькулятор</title>
</head>
<body>

<form action="/dz3/calc.php" method="get">

    <input type="number" name="x" value="<?php echo $a; ?>">
    <select name="op">
        <option name="/">/</option>
        <option name="*">*</option>
        <option name="-">-</option>
        <option name="+">+</option>
    </select>
    <input type="number" name="y" value="<?php echo $c; ?>">
    <button type="submit">=</button>
    <input type="text" value="<?php echo $result; ?>">

</form>

</body>
</html>
