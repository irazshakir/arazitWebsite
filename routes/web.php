<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoMailController;


Route::get('/', function () { return view('welcome'); })->name('welcome');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/products', function () { return view('products'); })->name('products');
Route::get('/contact', function () { return view('contact'); })->name('contact');

Route::post('/submit-demo', [DemoMailController::class, 'submitDemo'])->name('submit.demo');
Route::post('/submit-contact', [DemoMailController::class, 'submitContact'])->name('submit.contact');

Route::get('/thanks', function () {
    return view('thanks');
})->name('thanks');


require __DIR__.'/auth.php';
