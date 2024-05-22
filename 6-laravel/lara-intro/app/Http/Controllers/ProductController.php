<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    function products()
    {
        // $products = file_get_contents("https://fakestoreapi.com/products");
        // return $products;
        $res = Http::get("https://fakestoreapi.com/products");
        dd($res->collect()->where("price", "<", 50)->where("rating.rate", ">", 3)->all());
    }

    function productWithMaxPrice($max)
    {
        $res = Http::get("https://fakestoreapi.com/products");
        dd($res->collect()->where("price", "<", $max)->all());
    }

    function productWithMinPrice($min)
    {
        $res = Http::get("https://fakestoreapi.com/products");
        dd($res->collect()->where("price", ">", $min)->all());
    }

    function productPriceBetween($min, $max)
    {
        $res = Http::get("https://fakestoreapi.com/products");
        // $results = $res->collect()->where("price", ">", $min)->where("price", "<", $max)->all();
        $results = $res->collect()->whereBetween("price", [$min, $max])->all();
        dd($results);
    }
}
