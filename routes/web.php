<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', 'App\Http\Controllers\IndexController@home');
Route::get('/{any}', function() {
    return view('index');
})->where('any', '.*');
