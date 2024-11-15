<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Welcome');
});

Route::get('/Hello World', function () {
    return view('Hello_World');
});
