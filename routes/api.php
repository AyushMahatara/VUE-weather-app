<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/weather', function (Request $request) {
    dd('asd');
    $response = Http::get("https://api.openweathermap.org/data/2.5/weather?lat=26.67135301&lon=87.66763318&appid=dfd2e5251e1077b63b4c4e3b9e861c8c");
    dd($response);
    return $response->json();
});
