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

Route::get('/mobil', function () {
    return view('welcome');
});

Route::get('/motor', function () {
    return '<h1>Halo</h1>' .
    'Selamat datanag di webapp saya<br>'
    .'Laravel, emang keren';
});

Route::get('/alamat', function () {
    return view('alamat');
});

Route::get('/hobi', function () {
    return view('hobi');
});

Route::get('/nama', function () {
    return view('nama');
});

Route::get('/teman', function () {
    return view('teman');
});

Route::get('/tanggal', function () {
    return view('tanggal');
});