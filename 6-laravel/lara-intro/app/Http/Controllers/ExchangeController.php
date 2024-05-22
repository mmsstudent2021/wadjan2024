<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExchangeController extends Controller
{
    function toMmk($amount, $currency)
    {
        $res = Http::get("http://forex.cbm.gov.mm/api/latest");
        $rates = $res->collect();
        $currentCurrencyRate = str_replace(",", "", $rates['rates'][strtoupper($currency)]);
        // dd($currentCurrencyRate);
        $mmk = $amount * $currentCurrencyRate;
        dd($mmk);
    }
}
