<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/left-sidebar', function () {
    return view('left-sidebar');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/tour', function () {
    return view('tour');
});