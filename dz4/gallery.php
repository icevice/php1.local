<?php

require __DIR__ . '/func/fgallery.php';

foreach ($list as $key => $im) {
    if (is_file(__DIR__ . '/img/' . $im)) {
        ?> <a href="/dz4/image.php?id=<?php echo $key; ?>"><img height="300" src="/dz4/img/<?php echo $im; ?>"></a><?
    }
}
?>

<form action="/dz4/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="picture">
    <button type="submit">отправить</button>
</form>
