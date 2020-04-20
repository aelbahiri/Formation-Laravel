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


//Routes, // declench function anonyme,  //Declare segement dynamic by using  {..}
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/about', 'HomeController@about')->name('about');

Route::resource('/posts', 'PostController')->except(['destroy']);











// Route::get('/contact', function () {
//     return view('contact');
// });