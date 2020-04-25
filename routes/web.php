<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/', function(){
    return view('welcome');
});

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/about', 'HomeController@about')->name('about');

Route::get('/posts/archive', 'PostController@archive');
Route::patch('/posts/{id}/restore', 'PostController@restore');

Route::get('/posts/all', 'PostController@all');

Auth::routes();
Route::resource('/posts', 'PostController');











// Route::get('/contact', function () {
//     return view('contact');
// });
Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
