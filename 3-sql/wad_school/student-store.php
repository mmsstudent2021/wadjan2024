<?php

require_once "./db_connect.php";



// print_r($_POST);

$name = $_POST["name"];
$course_id = $_POST["course_id"];
$start_date = $_POST["start_date"];
$start_time = $_POST["start_time"];
$end_time = $_POST["end_time"];
$student_limit = $_POST["student_limit"];
$is_register_open = isset($_POST["is_register_open"]) ? $_POST["is_register_open"] : 0;


// SQL 

$sql = "INSERT INTO batches (name,course_id,start_date,start_time,end_time,student_limit,is_register_open) 
VALUES ('$name',$course_id,'$start_date','$start_time','$end_time','$student_limit',$is_register_open)";
// die($sql);


$query = mysqli_query($conn, $sql); // working stage

if ($query) {
    header("Location:batch-list.php");
}

// var_dump($query);

// echo $sql;
