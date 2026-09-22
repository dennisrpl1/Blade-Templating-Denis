<?php

use Illuminate\Support\Facades\Route;

// Redirect halaman awal agar langsung ke /home
Route::get('/', function () {
    return redirect('/home');
});

// Route untuk 3 halaman kita
Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});