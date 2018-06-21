<?php

/*
<!-- |-------------------------------------------------------------------------- -->
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('/signup','UsersController@create')->name('signup');

Route::get('/login','UsersController@login')->name('login');

Route::resource('users','UsersController');


app\Models\User::create(['name'=> 'JICHN',
'email'=>'jichn@foxmail.com','password'=>bcrypt('password')])
