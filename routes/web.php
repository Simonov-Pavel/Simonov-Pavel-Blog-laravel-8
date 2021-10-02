<?php

use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Main'], function () {
	Route::get('/', 'IndexController')->name('home');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
	Route::group(['namespace' => 'Main'], function () {
		Route::get('/', 'IndexController')->name('admin');
	});

	Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
		Route::get('/', 'IndexController')->name('admin.categories');
	});
});

Route::get('/welcome', function () {
	return view('welcome');
});

Auth::routes();
