<?php


require_once "./db_connect.php";



// print_r($_POST);
$id = $_POST["row_id"];
$title = $_POST["title"];
$short = $_POST["short"];
$fee = $_POST["fee"];

$sql = "UPDATE courses SET title='$title',short='$short',fee=$fee WHERE id=$id";

// echo $sql;

$query = mysqli_query($conn,$sql);

if($query){
    header("Location:course-create-list.php");
}
