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

/*
|--------------------------------------------------------------------------
| CSRF保護 ajax 版本
|--------------------------------------------------------------------------
*/
Route::get('ajax_csrf', 'CSRFController@view_ajax_csrf');
Route::post('ajax_csrf', 'CSRFController@ajax_csrf');

/*
|--------------------------------------------------------------------------
| 將uri排除CSRF保護
|--------------------------------------------------------------------------
*/
Route::get('except_csrf', 'CSRFController@view_except_csrf');
Route::post('except_csrf', 'CSRFController@except_csrf');