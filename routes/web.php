<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@home')
    -> name('home');
Route::get('elem/{index}', 'HomeController@element')
    -> name('elem');
