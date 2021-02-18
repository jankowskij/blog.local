<?php

return [

    // Форма обратной связи
    'feedback' => 'site/contact',

    // Роуты статических страниц
    'about' => 'static/about',

    // Роуты админпанели
    'manager/edit' => 'admin/edit',
    'manager' => 'admin/index',

    // Роуты регистрации
    'register' => 'user/register',
    'login' => 'user/login',
    'logout' => 'user/logout',

    // Роуты со статьями
    'news/([0-9]+)' => 'news/list/$1',
    'news' => 'news/index',

    '' => 'news/index',
];