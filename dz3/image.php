<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>image</title>
</head>
<body>

<?php

require __DIR__ . '/db.php';

$num = $_GET['id']
?>
<img src="img/<?php echo $list[$num]; ?>">

</body>
</html>

