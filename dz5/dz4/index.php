<?php
session_start();
include __DIR__ . '/func/read.php';

$res = read();
foreach ($res as $a){
    echo $a . '<br/>' ;
};
?>

<form method="post" action="/dz5/dz4/script.php" enctype="multipart/form-data" >
    <input type="text" name="addtext">
    <button type="submit">отправить</button>
</form>
