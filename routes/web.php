<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/acerca-de', function () {
    return view('acerca-de');
})->name('acerca-de');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');
