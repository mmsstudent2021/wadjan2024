<?php


require_once "./db_connect.php";



// print_r($_POST);
// die();

$name = $_POST["name"];
$id = $_POST["row_id"];
$course_id = $_POST["course_id"];
$start_date = $_POST["start_date"];
$start_time = $_POST["start_time"];
$end_time = $_POST["end_time"];
$student_limit = $_POST["student_limit"];
$is_register_open = isset($_POST["is_register_open"]) ? $_POST["is_register_open"] : 0;

$sql = "UPDATE batches SET name='$name',course_id=$course_id,start_date='$start_date',start_time='$start_time',end_time='$end_time',student_limit=$student_limit, is_register_open = $is_register_open WHERE id = $id ";

// echo $sql;

$query = mysqli_query($conn,$sql);

if($query){
    header("Location:batch-list.php");
}
