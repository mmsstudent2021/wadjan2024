<?php


function index(){

    $conn = mysqli_connect("localhost","hhz","asdffdsa","wad_school");

    $sql = "SELECT * FROM courses LIMIT 10";

    $query = mysqli_query($conn,$sql);

    $rows = [];

    while($row = mysqli_fetch_assoc($query)){
        array_push($rows,$row);
    }

    // echo "<pre>";

    // print_r($rows);

    header("Content-Type:application/json");

    echo json_encode($rows);

}


function store(){

}


function delete(){

}