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

/* 
// Default route
Route::get('/', function () { /* :: - static == sama function dengan -> eg: $route->object
    return view('welcome'); /* return file welcome.blade.php (dalam folder view) kalau dia dalam folder, cth folder home, jadi home.welcome
}); 
*/

Route::get('/', 'PortalController@home');

// User route
Route::get('/user', 'UserController@index'); // Ctrl+Shift+D - Duplicate file to new line
Route::get('/user/login', 'UserController@login')->name('user.login');
Route::get('/user/register', 'UserController@register')->name('user.register');
Route::get('/user/home', 'UserController@home')->name('user.home');