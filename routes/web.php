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
    return view('myGenCore.welcome');
});
Route::get('/index', function () {
    return view('myGenCore.index');
});
Route::get('/header', function () {
    return view('myGenCore.header');
});
Route::get('/style', function () {
    return view('myGenCore.style');
});
Route::get('/footer', function () {
    return view('myGenCore.footer');
});
Route::get('/404', function () {
    return view('myGenCore.404');
});
Route::get('/EnqueueGeneral', function () {
    return view('myGenCore.EnqueueGeneral');
});
Route::get('/SideBar', function () {
    return view('myGenCore.SideBar');
});
Route::get('/RegMenu', function () {
    return view('myGenCore.RegMenu');
});
Route::get('/CallMenu', function () {
    return view('myGenCore.CallMenu');
});
Route::get('/GeneralFunctions', function () {
    return view('myGenCore.GeneralFunctions');
});
Route::get('/AddThemeSupport', function () {
    return view('myGenCore.AddThemeSupport');
});