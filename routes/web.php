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
    return view('welcome');
});
Route::get('/home', function () {
    return view('child');
});
Route::get('/maps', function () {
    return view('layouts/maps');
});
Route::get('/maps/1', function () {
    return view('layouts/maps1');
});
Route::get('/maps/2', function () {
    return view('layouts/maps2');
});
Route::get('/maps/3', function () {
    return view('layouts/maps3');
});
Route::get('/maps/4', function () {
    return view('layouts/maps4');
});
Route::get('/maps/5', function () {
    return view('layouts/maps5');
});