<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/weather', function () {
    $apiKey = config('services.openweather.key');
    $lat = request('lat');
    $lng = request('lng');
    // $lat = 26.67135301;
    // $lng = 87.66763318;
    // $apiKey = 'dfd2e5251e1077b63b4c4e3b9e861c8c';
    $response = Http::get("https://api.openweathermap.org/data/2.5/weather?lat=$lat&lon=$lng&appid=$apiKey&units=metric");
    return $response->json();
});
