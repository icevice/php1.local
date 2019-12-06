<?php
require __DIR__ . '/func/save.php';

save($_POST['addtext']);

header('Location: /dz4/index.php');
