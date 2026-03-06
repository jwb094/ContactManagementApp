<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('contacts.dashboard');
});

Route::get('/contacts', function () {
    return view('contacts.book');
});
