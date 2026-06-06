<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/apropos', fn () => view('apropos'))
    ->name('view.apropos');
Route::get('/services', fn () => view('services'))
    ->name('view.services');
Route::get('/faqs', fn ()=> view ('faqs'))
    ->name('faqs');

Route::middleware(['throttle:10,1'])->group(function () {
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
});
