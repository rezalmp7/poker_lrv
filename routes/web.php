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

Route::get('/', function () {
    return view('home',[
        "id_page" => 'home'
    ]);
});
Route::get('/daftar', function () {
    return view('daftar',[
        "id_page" => 'daftar'
    ]);
});
Route::get('/cardgames', function () {
    return view('cardgames',[
        "id_page" => 'cardgames'
    ]);
});
Route::get('/dingdong', function () {
    return view('dingdong',[
        "id_page" => 'dingdong'
    ]);
});
