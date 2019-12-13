<?php
session_start();
require __DIR__ . '/../func/getCurrentUser.php';
require __DIR__ . '/../func/existsUser.php';
require __DIR__ . '/../func/getUsersList.php';
require __DIR__ . '/func/fgallery.php';

foreach ($list as $key => $im) {
    if (is_file(__DIR__ . '/img/' . $im)) {
        ?> <a href="/dz5/dz4/image.php?id=<?php echo $key; ?>"><img height="300" src="/dz5/dz4/img/<?php echo $im; ?>">
        </a><?
    }
}
if (null !== getCurrentUser()) {
    ?>
    <form action="/dz5/dz4/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="picture">
        <button type="submit">отправить</button>
    </form>
    <?
}



