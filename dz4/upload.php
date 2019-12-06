<?php

if (isset($_FILES['picture'])) {
    if ((0 === $_FILES['picture']['error'])
        && ('image/png' == $_FILES['picture']['type']
            xor ('image/jpeg' == $_FILES['picture']['type'])
        )) {
        move_uploaded_file(
            $_FILES['picture']['tmp_name'],
            __DIR__ . '/img/' . $_FILES['picture']['name']
        );
    }
}
header('location: /dz4/gallery.php');

