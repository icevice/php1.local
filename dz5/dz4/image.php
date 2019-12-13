<?php
session_start();
require __DIR__ . '/func/fgallery.php';

$num = $_GET['id'];

?>
<img height="300" src="/dz4/img/<?php echo $list[$num]; ?>" >
