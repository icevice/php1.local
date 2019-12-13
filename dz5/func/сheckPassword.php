<?php
//Функция сheckPassword($login, $password)
// пусть возвращает true тогда, когда существует пользователь с указанным логином
// и введенный им пароль прошел проверку

function checkPassword($login, $password)
{
    $db = getUsersList();
    if (existsUser($login)) {
        if (password_verify($password, $db[$login])) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}