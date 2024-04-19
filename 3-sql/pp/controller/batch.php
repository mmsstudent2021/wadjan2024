<?php


function index()
{
    $rows = get("SELECT * FROM batches LIMIT 10");
    // dd($rows);
    return view('batch', ["batches" => $rows]);
}

function delete()
{

    $id = $_GET["id"];

    if (runQuery("DELETE FROM batches WHERE id=$id")) {
        redirect(url("/batch"));
    }
}
