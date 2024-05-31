<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

    $data['name'] = "";

    return view('about', $data);
});

