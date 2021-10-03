<?php


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
		Route::get('/create', 'CreateController')->name('admin.categories.create');
		Route::post('/', 'StoreController')->name('admin.categories.store');
		Route::get('/{category}/show', 'ShowController')->name('admin.categories.show');
		Route::get('/{category}/edit', 'EditController')->name('admin.categories.edit');
		Route::patch('/{category}', 'UpdateController')->name('admin.categories.update');
		Route::delete('/{category}', 'DeleteController')->name('admin.categories.delete');
	});
});

Route::get('/welcome', function () {
	return view('welcome');
});

Auth::routes();
