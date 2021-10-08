<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Main'], function () {
	Route::get('/', 'IndexController')->name('home');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified']], function () {
	Route::group(['namespace' => 'Main'], function () {
		Route::get('/', 'IndexController')->name('admin');
	});

	Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
		Route::get('/', 'IndexController')->name('admin.users');
		Route::get('/create', 'CreateController')->name('admin.users.create');
		Route::post('/', 'StoreController')->name('admin.users.store');
		Route::get('/{user}/show', 'ShowController')->name('admin.users.show');
		Route::get('/{user}/edit', 'EditController')->name('admin.users.edit');
		Route::patch('/{user}', 'UpdateController')->name('admin.users.update');
		Route::delete('/{user}', 'DeleteController')->name('admin.users.delete');
	});

	Route::group(['namespace' => 'Post', 'prefix' => 'post'], function () {
		Route::get('/', 'IndexController')->name('admin.posts');
		Route::get('/create', 'CreateController')->name('admin.posts.create');
		Route::post('/', 'StoreController')->name('admin.posts.store');
		Route::get('/{post}/show', 'ShowController')->name('admin.posts.show');
		Route::get('/{post}/edit', 'EditController')->name('admin.posts.edit');
		Route::patch('/{post}', 'UpdateController')->name('admin.posts.update');
		Route::delete('/{post}', 'DeleteController')->name('admin.posts.delete');
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

	Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
		Route::get('/', 'IndexController')->name('admin.tags');
		Route::get('/create', 'CreateController')->name('admin.tags.create');
		Route::post('/', 'StoreController')->name('admin.tags.store');
		Route::get('/{tag}/show', 'ShowController')->name('admin.tags.show');
		Route::get('/{tag}/edit', 'EditController')->name('admin.tags.edit');
		Route::patch('/{tag}', 'UpdateController')->name('admin.tags.update');
		Route::delete('/{tag}', 'DeleteController')->name('admin.tags.delete');
	});
});

Auth::routes(['verify' => true]);
