<?php


require_once "./db_connect.php";

$id = $_GET["row_id"];



// sql

$sql = "DELETE FROM students WHERE id = $id ";

// die($sql);

// die($sql);


// query

$query = mysqli_query($conn, $sql);

// var_dump($query);
// die();


if ($query) {
    header("Location:student-list.php");

}
