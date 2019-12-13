<?php
session_start();


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
var_dump(getCurrentUser());
header('location: /dz5/dz4/gallery.php');

