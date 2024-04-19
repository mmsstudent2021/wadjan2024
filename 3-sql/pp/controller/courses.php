<?php


function index()
{

    // $conn = mysqli_connect("localhost","hhz","asdffdsa","wad_school");

    // $sql = "SELECT * FROM courses LIMIT 10";

    // $query = mysqli_query($conn,$sql);

    // $rows = [];

    // while($row = mysqli_fetch_assoc($query)){
    //     array_push($rows,$row);
    // }

    // // echo "<pre>";

    // // print_r($rows);

    // header("Content-Type:application/json");

    // echo json_encode($rows);

    $rows = get("SELECT * FROM courses LIMIT 10");

    // return view("courses/index", ["courses" => $rows]);
    return json($rows);
}


function store()
{
}


function delete()
{
    $id = $_GET["id"];

    if (runQuery("DELETE FROM courses WHERE id=$id")) {
        redirect(url("/courses"));
    }
}
