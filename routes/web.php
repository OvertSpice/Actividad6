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
    return view('Product.index');
});


Route::get('/index', function () {
    return view('Producto.index');
});

Route::get('/edit', function () {
    return view('Producto.edit');
});

Route::get('/create', function () {
    return view('Producto.create');
});