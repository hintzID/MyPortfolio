<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{catchall?}', function () {
    return response()->view('welcome');
})->where('catchall', '(.*)');
