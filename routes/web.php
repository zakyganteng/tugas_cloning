<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//bootstrap
Route::get('/cloning', function() {
    return view('cloning');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/routing', function() {
    return view('routing');
});

Route::get('/basic_routing', function() {
    return 'Hello World';
});

Route::view('/view_route', 'view_route');
Route::view('/view_route', 'view_route', ['name' => 'zaky']);
