<?php

system("clear");


// index array
// $arr = array("a", "b", "c");
// $x = ["x", "y", "z"];

// echo array_pop($x);
// echo array_shift($x);
// echo "\n";
// print_r($x);

// assoc array key => value

// $assoc = array(
//     "myName" => "hein htet zan",
//     "myAge" => 30,
//     "myJob" => array("developer", "instructor", "pm"),
//     "gf" => null,
//     "isHandsome" => true
// );


// echo array_search("hein htet zan",$assoc);
// echo array_key_exists("myage",$assoc);

// print_r(array_keys($assoc));
// print_r(array_values($assoc));

// $assoc = [
//     "myName" => "hein htet zan",
//     "myAge" => 30,
//     "myJob" => array("developer", "instructor", "pm"),
//     "gf" => null,
//     "isHandsome" => true
// ];

// echo json_encode($assoc);

// print_r($assoc);
// print($assoc["myName"]);
// print($assoc["myAge"]);

// print_r($arr);
// echo $arr[0];
// echo $arr[1];
// print_r($x);

// $arr = [];
// $arr[0] = "a";
// $arr[1] = "b";
// $arr[2] = "c";

// print_r($arr);

// $assoc = [];
// $assoc["name"] = "hhz";
// $assoc["age"] = 30;
// $assoc["gender"] = "male";

// print_r($assoc);

// $arr = [];

// array_push($arr,"a");
// array_push($arr,"b");
// array_push($arr,"c");
// array_unshift($arr, "a");
// array_unshift($arr, "b");
// array_unshift($arr, "c");

// print_r($arr);



// $a = array(2, 4, 6, 8);

// echo array_product($a);

// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
// $result = array_merge($array1, $array2);

// print_r($result);


// $arr = ["a", "b", "c", "a", "d", "e", "f", "c"];

// shuffle($arr);
// $r = array_reverse($arr);
// $r = array_unique($arr);

// print_r(join(" --- ",$arr));

// string to array
// print_r(explode(" ", "san kyi tar"));

// arr to string
// echo implode(" --- ", $arr);

// print_r(range(10,100,20));

// echo in_array("c",$arr);
// echo in_array("z",$arr);

// $info = array('coffee', 'brown', 'caffeine');


// list($x,$y) = $info;

// echo $y;


// echo $arr[0];
// echo current($arr);
// echo "\n";
// echo $arr[count($arr) - 1];
// echo end($arr);
// echo "\n";


// $r = array_slice($arr,1,3);
// $r = array_splice($arr,1,3);

// print_r($r);

// print_r($arr);


// foreach(array_rand($arr,3) as $i){
//    echo $arr[$i];
//    echo "\n";
// }

// echo $arr[array_rand($arr,2)];
// echo "\n";
// echo $arr[array_rand($arr,1)];
// echo "\n";
// echo $arr[array_rand($arr,1)];
// echo "\n";
// echo $arr[array_rand($arr,1)];
// echo "\n";
// echo $arr[array_rand($arr,1)];
// echo "\n";


// print_r(array_chunk($arr,2));

// $nums = [5,12,10,6,7,3];

// $r = array_map(fn($el) => $el*2 ,$nums);
// $r = array_map(function($el){
//     return $el * 2;
// } ,$nums);

// $r = array_filter($nums,fn($el) => $el <= 10);

// $r = array_reduce($nums,fn($pv,$cv) => $pv+$cv, 0);

// print_r($nums);
// print_r($r);

// $json = file_get_contents("https://jsonplaceholder.typicode.com/todos/1");

// echo $json;
// echo "\n";

// $assoc = json_decode($json,true);

// print_r($assoc);

// echo "\n";
// echo $assoc["userId"];
// echo "\n";
// echo $assoc["title"];
// echo "\n";

// print_r($GLOBALS);
// print_r($_SERVER);

// $GLOBALS["MY_NAME"] = "hein htet zan";
// $GLOBALS["MY_AGE"] = 30;

// print_r($GLOBALS);

// function run(){
//     return "My name is ". $GLOBALS["MY_NAME"];
// }

// echo run();