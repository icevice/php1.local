<?php

var_dump(include __DIR__ . '/fun/discriminant.php'); // 1  либо true (успешное подключение)
var_dump(include __DIR__ . '/fun/funtest.php'); // warning
// если подключаемая функция имеет return  она возвращает результат.