<?php

namespace Components;

class Router 
{
    private $routes;

    // Конструктор, принимает путь к роутам
    public function __construct($routesPath) 
    {
        $this->routes = include($routesPath);
    }

    // Парсер URI, возвращает строку
    public function getURI() : string
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    // Определяет контроллер, и вызывает его.
    public function run()
    {
        $uri = $this->getURI();
        
        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {

                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                $segments = explode('/', $internalRoute);

                $controllerName = ucfirst(array_shift($segments).'Controller');
                $actionName = 'action' . ucfirst(array_shift($segments));
                $fullControllerName = "Controllers\\$controllerName";
                $params = $segments;

                $controllerObject = new $fullControllerName();

                // Вызывает метод $actionName у объекта с параметрами
                call_user_func_array(array($controllerObject, $actionName), $params);

                if ($controllerObject) {
                    break;
                }
            }
        }

    }
}