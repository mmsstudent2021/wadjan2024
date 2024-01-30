<?php

$x = "xxx";
const MY_NAME = "hein htet zan";

function run(){

    global $x;

    static $z = 5;
    echo $z;
    $z++;

    // $y = "yyy";
    // echo $x;
    // echo MY_NAME;
}

run();
run();
run();

// echo $x;
// echo $y;