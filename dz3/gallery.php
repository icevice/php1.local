<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gallery</title>
</head>
<body>

<?php

require __DIR__ . '/db.php';

foreach ($list as $key => $im) {
    if (is_file(__DIR__ . '/img/' . $im)) {
        ?> <a href="/dz3/image.php?id=<?php echo $key; ?>"><img src="/dz3/img/<?php echo $im; ?>"></a><?
    }
}
?>


</body>
</html>

