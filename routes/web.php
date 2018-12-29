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


/*
|--------------------------------------------------------------------------
| CSRF保護 form 表單版本
|--------------------------------------------------------------------------
*/
Route::get('html_csrf', 'CSRFController@view_html_csrf');
Route::post('html_csrf', 'CSRFController@html_csrf');