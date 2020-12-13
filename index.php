<?php

$arr = [ 'a'=>2, 'b'=>3, 'c'=>4, 'd'=>5 ];
$string = '4521 0045 6789 1901';
/*
$string = "This weekend, I'm going shopping for a pet chicken.";
define('ROOT', dirname(__FILE__));
$longtext = include_once (ROOT.'/text_bovie.php');

$massive = [];
$type = 'integer';
$count = 0;
$count_text = strlen($longtext);
echo "Общее кол-во символов - ".$count_text . "<br>";
preg_match_all('/[1-2][0-9]{3}/', $longtext, $matches, PREG_SET_ORDER);
echo "Список дат <br>";
 for ($i = 1; $i<count($matches); $i++){
     for ($j = 0; $j<count($matches[$i]); $j++){
         $rezult = $matches[$i][$j];
         if ($rezult[0] == 1 and $rezult[1] == 9) {
             $massive[] = $rezult;
         }
         elseif ($rezult[0] == 2 and $rezult[1] == 0) {
             $massive[] = $rezult;
         }
     }
 }
 $massive_unique = array_unique($massive);

 for ($i = 0; $i<count($massive_unique); $i++) {
    if (!empty($massive_unique[$i])) {
       unset($massive_unique[$i]);
    }
}
 sort($massive_unique);
 for ($i = 0; $i<count($massive_unique); $i++) {
     settype($massive_unique[$i], $type);
    $count++;
    echo $massive_unique[$i] . " " . gettype($massive_unique[$i]) . "<br>";
}
 echo "Общее кол-во дат - " . $count;
 */


 $stringer = 'My dad it`s the best!';
 $number = 54.5;
 $number_string = '54';

 if(is_numeric($number)) {
     echo "Yes";
 }
 else {
     echo "No";
 }