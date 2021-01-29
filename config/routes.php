<?php

return [

    // Роуты админпанели
    'manager' => 'admin/index',

    // Роуты регистрации
    'register' => 'user/register',
    'login' => 'user/login',

    // Роуты со статьями
    'news/([0-9]+)' => 'news/list/$1',
    'news' => 'news/index',
    '' => 'news/index'
];