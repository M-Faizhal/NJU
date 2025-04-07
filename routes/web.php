<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/isiblog', function () {
    return view('pages.isiblog');
});

Route::get('/contact', function () {
    return view('pages.contact');
});