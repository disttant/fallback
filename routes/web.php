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
    abort(503);
});

Route::get('/401', function () {
    abort(401);
});

Route::get('/403', function () {
    abort(403);
});

Route::get('/404', function () {
    abort(404);
});

Route::get('/419', function () {
    abort(419);
});

Route::get('/429', function () {
    abort(429);
});

Route::get('/500', function () {
    abort(500);
});

Route::get('/503', function () {
    abort(503);
});



