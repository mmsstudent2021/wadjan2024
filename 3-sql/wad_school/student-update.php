<?php


require_once "./db_connect.php";



// print_r($_POST);
// die();


$id = $_POST["row_id"];
$name = $_POST["name"];
$date_of_birth = $_POST["date_of_birth"];
$gender_id = $_POST["gender_id"];
$nationality_id = $_POST["nationality_id"];
$pocket_money = $_POST["pocket_money"];

$sql = "UPDATE students SET name='$name',date_of_birth='$date_of_birth',gender_id='$gender_id',nationality_id='$nationality_id',pocket_money='$pocket_money' WHERE id = $id ";

// echo $sql;

$query = mysqli_query($conn,$sql);

if($query){
    header("Location:student-list.php");
}
