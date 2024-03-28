<?php

require_once "./db_connect.php";



// print_r($_POST);
// die();

$title = $_POST["title"];
$short = $_POST["short"];
$fee = $_POST["fee"];

// SQL 

$sql = "INSERT INTO courses (title,short,fee) VALUES ('$title','$short',$fee)";

$query = mysqli_query($conn,$sql); // working stage

if($query){
    header("Location:course-create-list.php");
}

// var_dump($query);

// echo $sql;
