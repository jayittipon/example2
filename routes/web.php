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

// Route::get('/', [HomeController::class,'index']);
// Route::get('/about', [HomeController::class,'about']);
// Route::get('/contact', [HomeController::class,'contact']);

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');

Route::get('/user', 'UserController@index');

Route::get('/calculator/sum/{num1}/{num2}', 'calculatorController@sum');

Route::get('/สวัสดี/{name}/{surname}/{age}', 'UserController@hello');


