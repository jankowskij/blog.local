<?php
	namespace Core;
	
	class Router
	{
        // Закидываем массив объектов Routes,и реальный URI
		public function getTrack($routes, $uri)
		{
            // Раскладываем массив на отдельные объекты
			foreach ($routes as $route) {
                // Спецпаттерном преобразовываем реальный адрес в нужный вид
				$pattern = $this->createPattern($route->path);
				// Проверяем адрес URI на соответствие регулярке
				// Если URI подойдет под регулярку, в $params будут параметры
				if (preg_match($pattern, $uri, $params)) {
                    // очищаем параметры от элементов с числовыми ключами
                    $params = $this->clearParams($params);
                    // Загоняем в объект Track найденные свойста объекта Route
					return new Track($route->controller, $route->action, $params);
				}
			}
			
			return new Track('error', 'notFound');
		}
		
		/*
			Метод преобразует путь из роута в регуляку,
			подставляя вместо параметров роута именованные карманы
			к примеру, из адреса '/test/:var1/:var2/' метод
			сделает регулярку '#^/test/(?<var1>[^/]+)/(?<var2>[^/]+)/?$#'
        */
        
		private function createPattern($path) {
			return '#^' . preg_replace('#/:([^/]+)#', '/(?<$1>[^/]+)', $path) . '/?$#';
		}
		
		private function clearParams($params) {
			$result = [];
			
			foreach ($params as $key => $param) {
				if (!is_int($key)) {
					$result[$key] = $param;
				}
			}
			
			return $result;
		}
	}