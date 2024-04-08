<?php

require_once "./db_connect.php";



// print_r($_POST);
// die();

$name = $_POST["name"];
$date_of_birth = $_POST["date_of_birth"];
$gender_id = $_POST["gender_id"];
$nationality_id = $_POST["nationality_id"];
$pocket_money = $_POST["pocket_money"];

// SQL 
$sql = "INSERT INTO students (name,date_of_birth,gender_id,nationality_id,pocket_money) 
VALUES ('$name','$date_of_birth',$gender_id,$nationality_id,$pocket_money)";
// echo "<pre>";
// die($sql);


$query = mysqli_query($conn, $sql); // working stage

if ($query) {
    header("Location:student-list.php");
}

// var_dump($query);

// echo $sql;
