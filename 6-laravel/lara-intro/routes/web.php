<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return "I'm Home";
});


// about-us

Route::get("about-us", function () {
    return "I'm about Page";
});

// mac
Route::get("mac", function () {
    return "here is macbook";
});


// contact
