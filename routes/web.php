<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::view('services', 'services')->name('services');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');

Route::get('properties', [PropertyController::class, 'index'])->name('properties');
Route::get('properties/{property}', [PropertyController::class, 'show'])->name('properties.show');
