<?php

	class Date
	{
		public $day;
		public $month;
		public $year;

		public function __construct($date=null)
		{
            // если дата не передана - пусть берется текущая
            if (!$date) {
				$date = date("Y-m-d");
			}

			$dateArray = explode('-', $date);

			$this->year = $dateArray[0];
			$this->month = $dateArray[1];
			$this->day = $dateArray[2];
		}
		
		public function getDay()
		{
            return $this->day;
            
		}
		
		public function getMonth($lang = null)
		{

			$arrayMonth = [
			'en' => [
                1 => 'January',
                2 => 'February',
                3 => 'March',
				4 => 'April',
				5 => 'May',
				6 => 'Juny',
				7 => 'July',
				8 => 'August',
				9 => 'September',
				10 => 'October',
				11 => 'November',
				12 => 'December'],
			'ru'  => [
				1 => 'Январь',
                2 => 'Февраль',
                3 => 'Март',
				4 => 'Апрель',
				5 => 'Май',
				6 => 'Июнь',
				7 => 'Июль',
				8 => 'Август',
				9 => 'Сентябрь',
				10 => 'Октябрь',
				11 => 'Ноябрь',
				12 => 'Декабрь']
			];

			if ($lang == 'ru') {
				return $arrayMonth['ru'][trim($this->month, "0")];
			}
			elseif ($lang == 'en') {
				return $arrayMonth['en'][trim($this->month, "0")];
			}
			else {
				return $this->month;
			}


		}
		
		public function getYear()
		{
			return $this->year;
		}
		
		public function getWeekDay($lang = null)
		{
			$arrayWeekDay = [
				'ru' => [
					1 => 'Понедельник',
					2 => 'Вторник',
					3 => 'Среда',
					4 => 'Четверг',
					5 => 'Пятница',
					6 => 'Суббота'
				],

				'en' => [
					1 => 'Monday',
					2 => 'Tuesday',
					3 => 'Wednesday',
					4 => 'Thursday',
					5 => 'Friday',
					6 => 'Saturday'
				]
			];

            $date = $this->year.'-'.$this->month.'-'.$this->day;
			$weekDay = date('w',strtotime($date));
			if ($lang == 'ru') {
				return $arrayWeekDay['ru'][$weekDay];
			}
			elseif ($lang == 'en') {
				return $arrayWeekDay['en'][$weekDay];
			}
			else {
				return $weekDay;
			}
			
		}
		
		public function addDay($value)
		{
			// добавляет значение $value к дню
			$this->day += $value;
			return $this;
		}
		
		public function subDay($value)
		{
			// отнимает значение $value от дня
			$this->day -= $value;
			return $this;
		}
		
		public function addMonth($value)
		{
			// добавляет значение $value к месяцу
			$this->month += $value;
			return $this;
		}
		
		public function subMonth($value)
		{
			// отнимает значение $value от месяца
			$this->month -= $value;
			return $this;
		}
		
		public function addYear($value)
		{
			// добавляет значение $value к году
			$this->year += $value;
			return $this;
		}
		
		public function subYear($value)
		{
			// отнимает значение $value от года
			$this->year -= $value;
			return $this;
		}
		
		public function format($format)
		{
			// выведет дату в указанном формате
			// формат пусть будет такой же, как в функции date
		}
		
				public function __toString()
				{
					// выведет дату в формате 'год-месяц-день'
					return $this->year . ' ' . $this->getMonth() . " " . $this->getDay() . "<br>";
				}
	}

	$date = new Date('2025-12-31');
	
	echo $date->getYear();  // выведет '2025'
	echo $date->getMonth(); // выведет '12'
	echo $date->getDay();   // выведет '31'
	
	echo $date->getWeekDay();     // выведет '3'
	echo $date->getWeekDay('ru'); // выведет 'среда'
	echo $date->getWeekDay('en'); // выведет 'wednesday'
	

	
	

// class Test
// {
//     public $a = 1;
//     private $b = 2;

//     public function __get($name)
//     {
//         return "Попытка взлома! Вызывают несуществующий или приватный метод " . $name;
//     }
// }

// $test = new Test;

// echo $test->hacking;


// class Objected {
   
// }

// class Arr
// {
//     public $numbers = [];

//     public function add($object) {
//         $this->numbers[] = $object;
//         return $this;
//     }
    
//     public function __toString()
//     {
//         return (string) count($this->numbers);
//     }

// }

// $arr = new Arr;

// echo $arr->add( new Objected)->add(new Objected)->add( new Objected);




// trait Helper 
// {
//     private $name;
//     private $age;
//     private $population;

//     public function getName() {
//         return $this->name;
//     }

//     public function setName($name) {
//         $this->name = $name;
//     }

//     public function getAge() {
//         return $this->age;
//     }

//     public function setAge($age) {
//         $this->age = $age;
//     }

//     public function getPopulation() {
//         return $this->population;
//     }

//     public function setPopulation($population) {
//         $this->population = $population;
//     }
// }

// class Country
// {
//     use Helper;

//     public function __construct($name, $age, $population) {
//         $this->name = $name;
//         $this->age = $age;
//         $this->population = $population;
//     }

// }

// $country = new Country('Belarus', 1200, 1000000);
// echo $country->getNAme() . ' ' . '- это страна, история которой насчитывает ' . $country->getAge() . ' ' . 
//      'лет и имеет около ' . $country->getPopulation() . ' ' . 'человек своего населения';







// interface iFigure3d
// {
//     public function __construct($a);
//     public function getVolume();
//     public function getSquare();
// }

// interface iQuadrate 
// {
//     public function __construct($a);
//     public function getSquare();
//     public function getPerimeter();
// }

// interface iRectangle 
// {
//     public function __construct($a, $b);
//     public function getSquare();
//     public function getPerimeter();
// }

// class Cube implements iFigure3d
// {
//     public $length;

//     public function __construct($a) {
//         $this->length = $a;
//     }

//     public function getVolume() {
//         return $this->length * $this->length * $this->length;
//     }

//     public function getSquare() {
//         return ($this->length * $this->length) * 6;
//     }
// }

// class Quadrate implements iQuadrate
// {
//     public $length;

//     public function __construct($a) {
//         $this->length = $a;
//     }

//     public function getPerimeter() {
//         return $this->length * 4;
//     }

//     public function getSquare() {
//         return $this->length * $this->length;
//     }
// }

// class Rectangle implements iRectangle
// {
//     public $length;
//     public $width;

//     public function __construct($a, $b) {
//         $this->length = $a;
//         $this->width = $b;
//     }

//     public function getPerimeter() {
//         return ($this->length + $this->width) * 2;
//     }

//     public function getSquare() {
//         return $this->length * $this->width;
//     }
// }


// class FigureCollection 
// {
//     public $figureArray = [];
//     private static $countFigure = 0;

//     public static function getCountFigure() {
//         return self::$countFigure;
//     }

//     public function add($object) {
//         $this->figureArray[] = $object;
//         self::$countFigure++;
//         return $this;
//     }
// }


// $unknownFigure = new FigureCollection;
// $unknownFigure->add( new Quadrate(5))->add( new Rectangle(5,10))->add( new Cube(5))
//               ->add( new Quadrate(10))->add( new Rectangle(5,10))->add( new Cube(7));
// foreach($unknownFigure->figureArray as $value) {
//     if ($value instanceof iFigure3d) {
//         $total += $value->getSquare();
//     }
// }

// echo $total;








// interface iUser 
// {
//     public function getName();
//     public function setName($name);
//     public function getAge();
//     public function setAge($age);
// }


// class User implements iUser 
// {
//     private $name;
//     private $age;

//     public function getName() {
//         return $this->name;
//     }

//     public function setName($name) {
//         $this->name = $name;
//     }

//     public function getAge() {
//         return $this->age;
//     }

//     public function setAge($age) {
//         $this->age = $age;
//     }
// }

// $user = new User;
// $user->setName('John');
// echo $user->getName();




// interface iUser
// {
//     public function solaryPyment();
// }


// class Worker implements iUser 
// {
//     private $name;
//     private $solary;
//     private $timeWork;

//     public function __construct($name, $solary, $timeWork) {
//         $this->name = $name;
//         $this->solary = $solary;
//         $this->timeWork = $timeWork;
//     }

//     public function solaryPyment() {
//        return  $this->getSolary() * $this->getTimeWork();
//     }

//     public function getName() {
//         return $this->name;
//     }

//     public function getSolary() {
//         return $this->solary;
//     }

//     public function getTimeWork() {
//         return $this->timeWork;
//     }

//     public function setName($name) {
//         $this->name = $name;
//     }

//     public function setSolary($solary) {
//         $this->solary = $solary;
//     }

//     public function setTimeWork($timeWork) {
//         $this->timeWork = $timeWork;
//     }

// }

// $user = new Worker('John', 20, 240);
// echo $user->solaryPyment();




// class User
// {
//    protected $name;
//    protected $age;
//    protected $solary;

//    public function __construct($name, $age, $solary) {
//        $this->name = $name;
//        $this->age = $age;
//        $this->solary = $solary;
//    }

//    public function getName() {
//        return $this->name;
//    }

//    public function setName($name) {
//        $this->name = $name;
//    }

//    public function getAge() {
//     return $this->age;
// }

//    public function setAge($age) {
//     $this->age = $age;
//    }

//     public function getSolary() {
//         return $this->solary;
//     }

//     public function setSolary($solary) {
//         $this->solary = $solary;
//     }
// }


// class Database 
// {
//     private $users = [];

//     public function add($object) {
//         $this->users[] = $object;
//         return $this;
//     }

//     public function remove($object) {
//         foreach ($this->users as $key=>$value) {
//             if ($value->getName() == $object) {
//                 unset($this->users[$key]);
//             }
//         }
//     }

//     public function calcMiddleSolary() {
//         foreach ($this->users as $user) {
//             $totalSolary += $user->getsolary();
//         }
//         $totalMiddleSolary = $totalSolary / count($this->users);
//         return $totalMiddleSolary;
//     }

//     public function getUsers() {
//         return $this->users;
//     }
// }


// $user_1 = new User('John', 35, 800);
// $user_2 = new User('Rebekka', 27, 1600);

// $base = new Database;
// $base->add($user_1)->add($user_2);
// echo '<pre>';
// print_r($base->getUsers());
// echo '<pre>';
// echo $base->calcMiddleSolary();


// class User 
// {
//     private static $countUser = 0;
//     public $userName;

//     public function __construct($name) {
//         $this->name = $name;
//         $this->setCountUser();
//     }

//     public function getCountUser() {
//         return self::$countUser;
//     }

//     private function setCountUser() {
//         self::$countUser++;
//     }
// }

// $user01 = new User('John');
// echo $user01->getCountUser() . '<br>';
// $user02 = new User('Rassel');
// echo $user01->getCountUser() . '<br>';



// class Num
// {
//     public static $num = 1;
//     public static $left = 30;

//     public static function getNum() {
//         return self::$left;
//     }

// }


// echo Num::getNum();

// class Products
// {
//     private $name;
//     private $price;
//     private $quantity;

//     public function __construct($name, $price, $quantity) {
//         $this->name = $name;
//         $this->price = $price;
//         $this->quantity = $quantity;
//     }

//     public function getName() {
//         return $this->name;
//     }

//     public function getPrice() {
//      return $this->price;
//     }

//     public function getQuantity() {
//         return $this->quantity;
//     }

//     public function getCost() {
//         return $this->getPrice() * $this->getQuantity();
//     }

// }

// class Cart
// {
//     private $productList = [];

//     public function add($product) {
//         $this->productList[] = $product;
//         return $this;
//     }

//     public function remove($product) {
//         foreach ($this->productList as $key=>$productItem) {
//             if ($productItem->getName() == $product) {
//                 unset($this->productList[$key]);
//             }
//         }
//     }

//     public function getTotalCart() {
//         $totalProduct = 0;
//         foreach ($this->productList as $productItem) {
//             $totalProduct += $productItem->getPrice();
//         }
//         return $totalProduct;
//     }

//     public function getProductList() {
//         return $this->productList;
//     }



// }

// $cartProduct = new Cart;
// $cartProduct->add( new Products('Samsung', 1100, 15))
//             ->add( new Products('Iphone 12', 800, 13))
//             ->add( new Products('Iphone 10', 1200, 13));

// foreach ($cartProduct->getProductList() as $cartItem) {
//             echo "Название товара: " . $cartItem->getName() . '<br>' .
//                  "Цена товара: " . $cartItem->getPrice() . '<br>' .
//                  "Кол-во: " . $cartItem->getQuantity() . '<br><br>';
// }

// echo "Общая стоимость товара" . ' ' . $cartProduct->getTotalCart();





// class Base 
// {
//     public $arr = [];
//     public $massive;

//     public function __construct() {
//     $this->massive = new Massive;
//     }

//     public function add($number) {
//         $this->arr[] = $number;
//         return $this;
//     }

//     public function arraySumm() {
//         return $this
//         ->massive
//         ->massiveSumm($this->arr);
//     }

// }

// class Massive
// {   

//     public function massiveSumm($arrays) {
//         return array_sum($arrays);
//     }
// }

// $users = new Base();
// $users->add(1)->add(1)->add(1)->add(3);
// echo $users->arraySumm();



// class User 
// {
//     private $name;
//     private $age;

//     public function __construct($name, $age) {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function getName() {
//         return $this->name;
//     }

//     public function getAge() {
//         return $this->age;
//     }

//     public function setName($name) {
//         $this->name = $name;
//     }

//     public function setAge($age) {
//         $this->age = $age;
//     }

// }

// class Worker extends User 
// {
//     private $solary;

//     public function __construct($name, $age, $solary) {
//         parent:: __construct($name, $age);
//         $this->solary = $solary;
//     }

//     public function getSolary() {
//         return $this-solary;
//     }

//     public function setSolary($solary) {
//         $this->solary = $solary;
//     }
// }

// $worker = new Worker('Janek', 30, 2200);
// echo $worker->getName();

// $user = new User('John', 28);
// echo $user->getName();












// class Arr
// {
//     private $array = [];

//     public function __construct($array) {
//         $this->array = $array;
//     }

//     public function addArray($number) {
//         $this->array[] = $number; 
//         return $this;
//     }

//     public function getArray() {
//         return $this->array;
//     }

//     public function getSummArray() {
//         return array_sum($this->array);
//     }
// }

//  echo (new Arr([1,2,3,4,5,6]))->addArray(7)->addArray(8)->addArray(9)->addArray(10)->getSummArray();







// class Arr 
// {
//     private $arr = [];

//     public function __construct($arr) {
//         $this->arr = $arr;
//     }

//     public function getArr() {
//         return $this->arr;
//     }

//     public function summArr() {
//         return array_sum($this->arr);
//     }
// }

// echo (new Arr([1,2,3]))->summArr() + (new Arr([1,2,3]))->summArr();

// $arr = new Arr([1,2,3]);
// echo "<pre>";
// print_r($arr->getArr());
// echo "<pre><br>";
// echo $arr->summArr();





// class Student {

//     public $name;
//     private $curs;
    
//     public function __construct($name) {
//         $this->name = $name;
//         $this->curs = 1;
//     }

//     public function getCurs() {
//         return $this->curs;
//     }

//     public function cursNextStep() {
//         $this->curs++;
//     }

// }

// $student = new Student('Paul');
// echo $student->getCurs();
// $student->cursNextStep();
// echo $student->getCurs();







// class Car {
//     public $priceAuto;
//     public $totalDoorAuto;
//     public $colorAuto;
//     public $fuel;
//     public $distance;

//     public function __construct($price, $totalDoorAuto, $fuel, $distance) {
//         $this->priceAuto = $price;
//         $this->totalDoorAuto = $totalDoorAuto;
//         $this->fuel = $fuel;
//         $this->distance = $distance;
//     }

//     public function fuelConsuption() {
//         return $this->distance / 100 * $this->fuel;
//     }
// }

// $bmw = new Car(10000, '5', 15, 550);
// $vw = new Car(10000, '4', 8, 250);
// $opel = new Car(23000, '5', 7, 500);
// $mercedes = new Car(75000, '4', 18, 1200);

// echo 'Стоимость БМВ' . ' ' . $bmw->priceAuto . '<br>' .
//      'Количество дверей' . ' ' . $bmw->totalDoorAuto . '<br>' .
//      'Расход топлива на' . ' ' . $bmw->distance . ' ' . 'км' . ' ' . $bmw->fuelConsuption() . ' ' . 'литра(ов)';




// session_start();

// if (!isset($_SESSION['counter'])) 
//     $_SESSION['counter'] = 0;
//     echo "Вы обновили страницу " . $_SESSION['counter']++ . " " . "раз";
//     echo "<br><a href=".$_SERVER['PHP_SELF'].">обновить"; 



// setcookie("counter", $counter);

// $counter = 1;


// if (isset($_COOKIE["counter"])) {
    
//     $counter = intval($_COOKIE["counter"]);
//     $counter++;
//     $str = "Вы посетили страницы сайта $counter раз(а)";
    
// } else {
//     $str = 'Ваш первый визит';    
// }

// $name = "Dmitry Shepel";
// $work = "System Engeeneering";
// $counter = 0;
// setcookie("name", $name, time()+360);
// setcookie("work", $work, time()+360);
// setcookie("counter", $counter, time()+99999);
// echo "<pre>";
// print_r($_COOKIE);
// echo "<pre>";



//  echo "Вы посетили страницу" . " " . $_COOKIE['counter'] . " " . "раз";





// Author Jankowski Wlad
/* Author Jankowski Wlad */

// setcookie("myName",$_REQUEST['name'],time()+60);
// setcookie("dataTime",date("F j, Y, g:i a"),time()+999999999);
// if (isset($_COOKIE['myName']) and !empty($_COOKIE['myName'])) {
    // echo "Здравствуйте," . ' ' . $_COOKIE['myName'] ."<br>";
//     echo $_COOKIE["dataTime"];
// }
// else {
//     echo "Cookie empty!";
// }
  

// echo "My first programm!";
// if (isset($_REQUEST['name']) and !empty($_REQUEST['name'])) {
//     setcookie('name', $_REQUEST['name'], time() + 3600);
//     $name = $_COOKIE['name'];
//     echo "Здравствуйте, $name";
//     var_dump($_COOKIE);
// }
// else {
//     echo "Здравствуйте, гость!";
// }


///////////////////////////////////
// $nameYour = $_REQUEST['name'];
// $dateStart = time();
// setcookie('dateStart', $dateStart, time() + 36000);
// setcookie('name', $nameYour, time() + 37000);
// $name = $_COOKIE['name'];
// $dateStart - $_COOKIE['dateStart'];
// if (time() >= $dateStart + 36000) {
//     echo "С возвращением, друг!";
// } else {
//     echo "Привет, $name";
// }
///////////////////////////////
// $start = microtime(1);

// $a = $_REQUEST['one'];
// $b = $_REQUEST['two'];
// $c = $_REQUEST['three'];
// $d = $_REQUEST['five'];

// $array = [$a, $b, $c, $d];
// $minNumber = min($array);
// $maxNumber = max($array);

// foreach ($array as $key) {
//     $rezult+=$key;
// }

// $mediumNumber = $rezult / count($array);

// echo "Минимальное значение" . " " . $minNumber . "<br>";
// echo "Максимальное значение" . " " . $maxNumber . "<br>";
// echo "Средне-арифметическая скалярная величина" . " " . $mediumNumber . "<br>";

// $stop = microtime(1);

// $timeWorkScript = $stop - $start;

// echo "Время работы скрипта -" . " " . $timeWorkScript;

// $start = microtime(1);

// function deleteNeigteves(&$arr) {
//     foreach($arr as $key=>$value) {
//         if ($value < 0) {
//             unset($arr[$key]);
//         }
//     }
//     return $arr;
// }

// $array = [1,4,7,3,8,-9,-19,34,-21,45,8];

// $itog = deleteNeigteves($array);

// echo '<pre>';
// print_r($itog);
// echo '<pre>';

// $stop = microtime(1);

// $time = $stop-$start;
// echo $time;


// function cartTotalInfo($products)
// {

//     $totalQuantity = 0;
//     $totalPrice = 0;

//     foreach ($products as $product) {
//         $totalQuantity += $product['quantity'];
//         $totalPrice += $product['price'] * $product['quantity'];
//     }

//     return array('totalQuantity' => $totalQuantity, 'totalPrice' => $totalPrice);
// }

// // Массив с товарами
// $products = array(
//     array('name' => 'Телевизор', 'price' => '400', 'quantity' => 1),
//     array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
//     array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2),
// );

// // Вызываем функцию с аргументом
// $result = cartTotalInfo($products);

// // Выводим результат
// echo '<pre>';
// print_r($result);
// echo '</pre>';

// function setSummProducts($arrays) {
//     $summQuantity = 0;
//     $summPrice = 0;
//     foreach ($arrays as $array) {
//         foreach ($array as $key=>$value) {
//             if ($key == 'price') {
//                 $summPrice += $value;
//             }
//             elseif ($key == 'quantity') {
//                 $summQuantity += $value;
//             }
//         }
//     }
//     return $array_all = ['Сумма покупок' => $summPrice, 'Сумма товаров' => $summQuantity];
// }

// $products = array(  
//     array('name' => 'Телевизор', 'price' => 600, 'quantity' => 1),
//     array('name' => 'Телефон', 'price' => 300, 'quantity' => 3),
//     array('name' => 'Кроссовки', 'price' => 150, 'quantity' => 2),
// );

// $setProduct = setSummProducts($products);
// var_dump($setProduct);


// $array = [];
// for ($i = 1; $i<=9; $i++) {
//     $array[] = "Кнопка $i";
// }
// echo "<ul>";
//  foreach ($array as $element) {
//      echo "<li><a href=\"#\">{$element}</a></li>";
//  }
//  echo "</ul>";

// $n = 300;

// for ($i = 1; $i<=$n; $i++ ) {
//     $rezult+=pow($i, 2);
// }
// settype($rezult, 'integer');
// echo "$rezult";

// for ($i = 1; $i<=25; $i++) {
//     $rezult+=$i;
// }
// echo $rezult;

// $array = [];
// for ($i = 1; $i<=25; $i++) {
//     $array[$i] = $i;
//     echo "$i<br>";
// }
// $summa = array_sum($array);
// echo $summa;



// $array = [33,57,79];
// if ($array[0]!=$array[1] and $array[1]!=$array[2]) {

// $arraySumma = array_sum($array);
// $arrayMidle = $arraySumma / count($array);
// settype($arrayMidle, 'integer');
// echo "Среднее-арифетическое" . ' ' . $arrayMidle;
// }
// else {
//     echo "В программе ошибка! - Одинаковое число!";
// }



// define('MIN', 50);
// define('MAX', 150);

// $x = 60;

// if ($x<=MAX and $x>=MIN) {
//     echo "Yes";
// }
// else {
//     echo "No";
// }

// $array_one = [5,10,20,30,40];
// $array_two = [50,100,200,300,400];
// array_push($array_one, 1000);
// unset($array[0]);

// echo $array_one[2] . " " . $array_two[2];

// var_dump($array_one);
// var_dump($array_two);




// $a = 10;
// $b = 5;

// echo "На лекцию пришли только {$a} студентов, остальные {$b} забили хуй на учебу!";

// $a = 152;
// $b = '152';
// $c = 'London';
// $d = array(152);
// $e = 15.2;
// $f = false;

// echo gettype($a);
// echo gettype($b);




// define('PI', 3.14);
// define('AVAGADRO', 3000);

// echo $c = PI + AVAGADRO;



// $a = 1;
// $b = 2;
// $c = 3;

// $c = &$a;

// echo $c;
// var_dump($c);



// $one = 1;
// $two = 2;
// $three = 3;

// $rezult = $one + $two;
// echo $rezult;

// $nameCanal = 'CNN';
// $colorCar = 'Green';
// $adressProducer = 'NY, The Wall-Street, 28/4';
// $temperatureWater = '25F';
// $modelPhone = 'Samsung Galaxy S20';


// $massive = [];
// $type = 'integer';
// $count = 0;
// $count_text = strlen($longtext);
// echo "Общее кол-во символов - ".$count_text . "<br>";
// preg_match_all('/[1-2][0-9]{3}/', $longtext, $matches, PREG_SET_ORDER);
// echo "Список дат <br>";
//  for ($i = 1; $i<count($matches); $i++){
//      for ($j = 0; $j<count($matches[$i]); $j++){
//          $rezult = $matches[$i][$j];
//          if ($rezult[0] == 1 and $rezult[1] == 9) {
//              $massive[] = $rezult;
//          }
//          elseif ($rezult[0] == 2 and $rezult[1] == 0) {
//              $massive[] = $rezult;
//          }
//      }
//  }
//  $massive_unique = array_unique($massive);

//  for ($i = 0; $i<count($massive_unique); $i++) {
//     if (!empty($massive_unique[$i])) {
//        unset($massive_unique[$i]);
//     }
// }
//  sort($massive_unique);
//  for ($i = 0; $i<count($massive_unique); $i++) {
//      settype($massive_unique[$i], $type);
//     $count++;
//     echo $massive_unique[$i] . " " . gettype($massive_unique[$i]) . "<br>";
// }
//  echo "Общее кол-во дат - " . $count;

?>