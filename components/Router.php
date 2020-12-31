<?php

class Router
{
    private $routes = [];

    public function __construct() {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    public function getUri() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run() {
        $uri = $this->getUri();
        foreach ($this->routes as $uriPattern => $path) { // Разбиваем массив с роутами построчно
            if (preg_match("~$uriPattern~", $uri)){ // Ищем в браузерной строке совпадение с строками в роутере
                $internalRout = preg_replace("~$uriPattern~", $path, $uri); // Нашли, производим замену переменных регуляркой
                $segments = explode('/', $internalRout); // Сегментируем полученную строку, записываем в массив
                $controllerName = array_shift($segments).'Controller'; // Получаем название контроллера (Класса)
                $controllerName = ucfirst($controllerName); // Делаем первую букву заглавной, для корректности
                $actionName = 'action'.ucfirst(array_shift($segments)); //  Получаем имя метода-action
                $parameters = $segments; // Остаток строки записываем в массив (Параметры для action)
                $controllerFile = ROOT . '/controllers/'.$controllerName.'.php'; // Формируем путь к контроллеру

            if (file_exists($controllerFile)) { // Подключаем файл контроллера
                include_once($controllerFile);
            }

            $controllerObject = new $controllerName; // Создаем объект класса контроллер
            /*
            Вызываем функцию, которая вызывает метод actionName
            класса controllerObject, c переданным массивом параметров
            $parameters
            */   
            $rezult = call_user_func_array(array($controllerObject, $actionName), $parameters);
            if ($rezult!=null) {
                break;
            }
        }
    }
    }


}