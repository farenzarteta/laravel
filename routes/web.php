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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/hello', function () {
//     return '<h1><b>halo</b></h1>';
// });
// Route::get('/users/{id}/{name}', function ($id, $name) { //passing parameter
//     return 'id: '.$id."<br>name: ".$name;
// });
// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('/','pagesController@index');
Route::get('/about','pagesController@about')->name('about');
Route::get('/service','pagesController@service');

Route::resource('posts','postController');

Auth::routes();

Route::get('/home', 'HomeController@index');
