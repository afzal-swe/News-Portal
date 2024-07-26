<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LanguageController;

Route::get('/', [HomeController::class, 'Home_Page'])->name('home_page');


// Frontend Language
Route::get('/lang/english', [LanguageController::class, 'Englisn_Lang'])->name('lang.english');
Route::get('/lang/bangla', [LanguageController::class, 'Bangla_Lang'])->name('lang.bangla');
