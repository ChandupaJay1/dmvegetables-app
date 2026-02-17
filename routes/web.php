<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/products/{page?}', [App\Http\Controllers\ProductController::class, 'index'])->name('products');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/quotations', function () {
    // Assuming quotations view will be created
    return view('quotations');
})->name('quotations');

Route::get('/privacy-policy', function () {
    // Assuming privacy-policy view will be created
    return view('privacy-policy');
})->name('privacy-policy');
