<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/isiblog', function () {
    return view('pages.isiblog');
});

Route::get('/product', function () {
    return view('pages.product');
});

Route::get('/product/land-clearing', function () {
    return view('pages.product-land-clearing');
});

Route::get('/product/soil-leveling', function () {
    return view('pages.product-soil-leveling');
});

Route::get('/product/heavy-equipment-rental', function () {
    return view('pages.product-heavy-equipment-rental');
});
