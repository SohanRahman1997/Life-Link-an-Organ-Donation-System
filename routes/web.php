<?php


use Illuminate\Support\Facades\Route;

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



Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/review', 'PagesController@review');

Route::get('/organ', 'PagesController@organ');

Route::get('/home', 'PagesController@home');

Route::get('/signup', 'AuthController@signup');

Route::get('/login', 'AuthController@login');

Route::resource('profile', 'ProfileController');

Route::resource('post', 'PostController');

Route::resource('review', 'ReviewController');