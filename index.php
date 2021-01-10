<?php

// Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

// Автозагрузка классов
spl_autoload_register();

// Подключаем файл с роутами
$routes = require $_SERVER['DOCUMENT_ROOT'] . '/project/config/routes.php';

// Роутинг
$track = ( new Core\Router ) -> getTrack($routes, $_SERVER['REQUEST_URI']);
$page  = ( new Core\Dispatcher ) -> getPage($track);
echo (new View) -> render($page);
