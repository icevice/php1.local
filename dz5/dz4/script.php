<?php
session_start();
require __DIR__ . '/func/save.php';

save($_POST['addtext']);

header('Location: /dz5/dz4/index.php');
