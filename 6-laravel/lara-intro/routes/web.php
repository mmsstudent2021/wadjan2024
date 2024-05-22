<?php

use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return "I'm Home";
});


// about-us

Route::get("about-us", function () {
    return "I'm about Page";
});

// mac
Route::get("mac/{type}/{size}", function ($type, $size) {
    return "here is macbook-$type $size inches";
});

Route::get("profile/{id?}", function ($id = null) {
    return "here is user profile $id";
});
// contact

Route::get("area/{w}/{b}", fn ($w, $b) => ($w * $b) . " sqft");

Route::get("/products", [ProductController::class, 'products']);


Route::get("/products/price-max/{max}", [ProductController::class, 'productWithMaxPrice']);

Route::get("/products/price-min/{min}", [ProductController::class, 'productWithMinPrice']);


Route::get("/products/price-between/{min}/{max}", [ProductController::class, 'productPriceBetween']);


Route::get("exchange-from/{amount}/{currency}/to-mmk", [ExchangeController::class, 'toMmk']);
