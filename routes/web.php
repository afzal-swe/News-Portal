<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\Frontend\SinglePostController;

Route::get('/', [HomeController::class, 'Home_Page'])->name('home_page');


// Frontend Language
Route::get('/lang/english', [LanguageController::class, 'Englisn_Lang'])->name('lang.english');
Route::get('/lang/bangla', [LanguageController::class, 'Bangla_Lang'])->name('lang.bangla');

// Single Post
Route::group(['prefix' => 'post'], function () {
    // User Route Section
    Route::controller(SinglePostController::class)->group(function () {
        //single News Post View
        Route::get('/view/{slug}', 'Single_Post')->name('single.post');
        // Sub Category News Post View
        Route::get('/sub-category/{id}', 'Sub_Category_View')->name('subcategory_view');
        // Category News Post View
        Route::get('/category/{id}', 'Category_Post')->name('category_post');

        // @dd()
    });
});
