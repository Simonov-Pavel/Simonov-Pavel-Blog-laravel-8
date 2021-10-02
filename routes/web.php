<?php

use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Main'], function () {
	Route::get('/', 'IndexController');
});

Route::get('/welcome', function () {
	return view('welcome');
});

Auth::routes();
