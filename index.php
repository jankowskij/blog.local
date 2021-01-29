<?php

// Чтение на ошибки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Автозагрузка классов
spl_autoload_register();

// Костанта корня
define('ROOT', dirname(__FILE__));
define('HOME', '/');

/// Подключение списка маршрутов
$routesPath = ROOT.'/config/routes.php';

// Запуск роутера, аргумент: список маршрутов
$router = new \Components\Router($routesPath);
$router->run();