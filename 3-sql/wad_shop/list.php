<?php

// read

echo "<pre>";

// connect mysql

$conn = mysqli_connect("localhost", "hhz", "asdffdsa", "wad_shop");

if (!$conn) {
    die(mysqli_connect_errno());
}

// sql statement
$sql = "SELECT * FROM products";

// run query
$query = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($query)){
    print_r($row["name"]);
}

// var_dump($query);

// fetch data
// print_r(mysqli_fetch_all($query));
// var_dump(mysqli_fetch_object($query));
// var_dump(mysqli_fetch_object($query));
// var_dump(mysqli_fetch_object($query));
// var_dump(mysqli_fetch_object($query));
// var_dump(mysqli_fetch_object($query));
// var_dump(mysqli_fetch_object($query));
// var_dump(mysqli_fetch_object($query));
