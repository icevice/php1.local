<?php
// Добавьте функцию getCurrentUser() которая возвращает либо имя вошедшего на сайт пользователя, либо null

function getCurrentUser()
{
    if (isset($_SESSION['user'])) {
        if (existsUser($_SESSION['user'])) {
            return $_SESSION['user'];
        }
    }

}