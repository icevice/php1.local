<?php
//Функция existsUser($login) проверяет - существует ли пользователь с заданным логином?

function existsUser($login)
{
    $db = getUsersList();
    return isset($db[$login]);

}