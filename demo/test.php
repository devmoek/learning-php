<?
// echo $userName;

// define("USER_NAME", "Mike");
// echo USER_NAME; // Mike

// define("ONE_HUNDRED", 100);
// define("ONE_HUNDRED_TEN", ONE_HUNDRED + 10);

// const TWO_HUNDRED = 200; // php 5.3
// const THO_HUDRED_TEN = TWO_HUNDRED + 10; // php5.6

// $name = "Mike";
// echo <<<LABEL
// He"ll"o
//     $name!
// LABEL;

// $juice = "apple";

// echo "He drank some $juice juice.";

// // the problem is
// //echo "He drank some juice made of $juices".;

// // the solution is
// echo "He drank some juice made of {$juice}s.";
// echo "He drank some juice made of ${juice}s.";

$str = "John";
is_string($str);

// Приведение типов
$int_from_srt = (int)$str; // 0 

// было ли присвоено переменной какое-либо значение
isset($str); // true
isset($x); // false
$x = null;
isset($x); // false


$shop = "close";

if($shop == "open"):
    echo "Go to the shop\n";
    echo "Buying a bread\n";
endif;
echo "Go home";


// exercise number two
$size = ini_get("post_max_size"); //8M
$letter = $size{strlen($size) - 1}; // last character of the word. It's M
$size = (int)$size; // 8

switch (strtoupper($letter)) {
    case "G": $size *= 1024;
    case "M": $size *= 1024;
    case "K": $size *= 1024;
}
echo $size;

// array
// $arr = []; $arr1 = array();
$arr = [
   "name"=>"John",
   "login"=>"root",
   "pass"=>"1234"
];
//echo count($arr);
$arr["age"] = 25;
$arr[] = true;
echo is_array($arr);
print_r($arr);


?>