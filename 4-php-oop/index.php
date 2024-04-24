<?php

echo "<pre>";

// require_once "./classes/Person.php";
// require_once "./classes/Phone.php";
// require_once "./classes/Db.php";
require_once "./classes/FileWriter.php";

$fw = new FileWriter(__DIR__."/notes/test.txt");
$fw->write("hello");
$fw->write("san");
$fw->write("kyi");
$fw->write("tar");


// $db = new Db;
// $students = $db->all("select * from students limit 10");

// print_r($students);


// $me = new Person("hein htet zan", 22, "male");
// print_r($me);
// echo $me->learn("php");
// echo "<br>";


// $you = new Person("Su Su", 19, "female");
// print_r($you);

// $myPhone = new Phone;
// $myPhone->brand = "iPhone";
// $myPhone->model = "15 Pro";
// print_r($myPhone);
// echo $myPhone->makeCall();

// system("clear");

// $me = new Person;
// $me->name = "hein htet zan";
// $me->age = 22;
// $me->gender = "male";
// // $me->bag = "phone";
// echo "<br>";

// print_r($me);
// echo "<br>";
// echo $me->name;
// echo "<br>";

// echo $me->speak("thai");
// echo "<br>";


// $you = new Person;
// $you->name = "Su Su";
// $you->age = 19;
// $you->gender = "female";
// print_r($you);
// echo $you->speak();
