<?php

// Чтение на ошибки
ini_set('display_errors', 1);
ini_set('session.gc_maxlifetime', 604800);
ini_set('session.cookie_lifetime', 604800);
error_reporting(E_ALL);

// Автозагрузка классов
spl_autoload_register();

session_start();

// Костанта корня
define('ROOT', dirname(__FILE__));
define('HOME', '/');

/// Подключение списка маршрутов
$routesPath = ROOT.'/config/routes.php';

// Запуск роутера, аргумент: список маршрутов
$router = new \Components\Router($routesPath);
$router->run();