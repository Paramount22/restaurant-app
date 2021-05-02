<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', 'FoodController@listFood');


Auth::routes(['register' => false]); // deaktivujeme modul registracie

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('categories', 'CategoryController');
Route::resource('food', 'FoodController');
