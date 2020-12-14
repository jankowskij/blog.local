<?php

// Author Jankowski Wlad

/* Author Jankowski Wlad */

// echo "My first programm!";



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
 

