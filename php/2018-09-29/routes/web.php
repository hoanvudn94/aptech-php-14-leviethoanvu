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
//     return view('user','UserControler@index');
// });
Route::get('/layTatCaNguoiDung','UserController@layTatCaNguoiDung');
Route::get('/layMotNguoiDung/{id}','UserController@layMotNguoiDung');
Route::post('/xoaNguoiDung/{id}','UserController@xoaNguoiDung');