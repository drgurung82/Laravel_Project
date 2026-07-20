<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/services', function () {
    return view('services');
});

Route::post("/save-course", function (Request $request){
    return $request;
});
