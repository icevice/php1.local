<?php
session_start();
require __DIR__ . '/func/getUsersList.php'; //возвращает массив всех пользователей и хэшей
require __DIR__ . '/func/existsUser.php';   //существует ли пользователь с заданным логином
require __DIR__ . '/func/сheckPassword.php';
require __DIR__ . '/func/getCurrentUser.php'; //имя вошедшего на сайт пользователя

if (isset($_POST['login']) && isset($_POST['password'])) {
    if (checkPassword($_POST['login'], $_POST['password'])) {
        $_SESSION['user'] = $_POST['login'];
        header('Location: /dz5/index.php');
    }
}
if (null !== getCurrentUser()) {
    header('Location: /dz5/index.php');
} else {
    ?>
    <form action="/dz5/login.php" method="post">
        <input type="text" name="login"><br/>
        <input type="password" name="password"><br/>
        <button type="submit">войти</button>

    </form>
    <?php
}





