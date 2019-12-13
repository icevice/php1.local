<?php
//Функция getUsersList() пусть возвращает массив всех пользователей и хэшей их паролей

function getUsersList()
{
    return ['admin' => '$2y$10$.tTPkOVk7mIEtFFQyrz4MeviganM5TkUFmJQEZ80w4648gHr6BYhq',
        'test' => '$2y$10$lgd0EluVoa4rZ/Nar2rGveQvFOPytQ0dGg0ZxX7ohsHJZDvMu8rnC'];
    //admin 123456 test 654321
}