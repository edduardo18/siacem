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

// Route::get('/formato1', function () {
//     return view('formato1');
// });

Route::get('formato1','TemplateController@template1');
Route::get('formato2','TemplateController@template2');
Route::get('formato3','TemplateController@template3');
Route::get('formato4','TemplateController@template4');
Route::get('formato5','TemplateController@template5');
Route::get('formato6','TemplateController@template6');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
