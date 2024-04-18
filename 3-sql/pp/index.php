<?php

require_once "./functions.php";
require_once "./router/web.php";


// echo "I'm index";

// path based routing
// "/" => view/home.php
// "/about-us" => view/about.php
// "/services" => view/services.php

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

// echo $_SERVER['REQUEST_URI'];
// echo "<br>";
// echo $_SERVER['PATH_INFO'] ?? "/";


$path = $_SERVER['PATH_INFO'] ?? "/";

// if ($path === "/") {
//     $file = "./views/home.php";
// } else if ($path === "/about-us") {
//     $file = "./views/about.php";
// } else if ($path === "/services") {
//     $file = "./views/services.php";
// } else {
//     $file = "./views/not-found.php";
// }

// echo "<pre>";

$current = $routes[$path] ?? false;

if ($current) {
    $arr = explode("@", $current);
    // print_r($arr);

    $controllerFile = $arr[0];
    $controllerFunction = $arr[1];

    // echo $controllerFile;

    require_once __DIR__ . "/controller/" . $controllerFile . ".php";

    call_user_func($controllerFunction);

} else {

    view('not-found');

}



// view($routes[$path] ?? "not-found");
