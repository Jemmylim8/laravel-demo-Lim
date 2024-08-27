<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\calcController;
use Illuminate\Support\Facades\Route;

Route::get('/calculator', [calcController::class, 'showCalculatorPage']);

Route::get('/index', function () {
    return view('mypages.index');
})->name('index');

Route::get('/services', function () {
    return view('mypages.services');
})->name('services');

Route::get('/gallery', function () {
    return view('mypages.gallery');
})->name('gallery');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/hehe', function(){
    return view('jem');
}); //name route
Route::get('/hehet', function(){
    return view('jem2');
})->name('dionar1'); //name route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';