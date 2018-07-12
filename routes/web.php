<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/message', function () {
	return view('message');
});

Route::get('/modal', function () {
	return view('modal');
});

Route::get('/coupon', function () {
	return view('coupon');
});

Route::get('/tabs', function () {
	return view('tabs');
});

Route::get('/modalCard', function () {
	return view('modalCard');
});

Route::get('/progressView', function () {
	return view('progressView');
});