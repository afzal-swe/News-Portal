<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\RoleUserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubcategoryController;


// Route::get('/customer-logout', [HomeController::class, 'customer_logout'])->name('customer.logout');

// Admin Home Route Section Start //
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login_from')->name('admin_login');
    Route::post('/login', 'login')->name('login');
    Route::get('/register', 'register_from')->name('register_from');
    Route::post('/create', 'user_create')->name('user_create');
});


Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'author'], function () {
        // Admin Home Route Section Start //
        Route::controller(AuthController::class)->group(function () {
            Route::get('/dashboard', 'Admin_dashboard')->name('dashboard');
            Route::get('/logout', 'Admin_logout')->name('admin.logout');
            // Route::get('/password-change', 'password_change')->name('admin.password_change');
            // Route::post('/password-update', 'update_change')->name('pass.update');
        });

        // User Route Section Start //
        Route::group(['prefix' => 'user'], function () {
            // User Route Section
            Route::controller(UserController::class)->group(function () {
                Route::get('/all', 'view_user')->name('view_user');
                Route::get('/create', 'Create_user')->name('Create_user');
                Route::post('/store', 'store_user')->name('store_user');
                // Route::get('/edit/{id}', 'edit_brand')->name('brand.edit');
                // Route::post('/update/{id}', 'brand_update')->name('brand.update');
                // Route::get('/delete/{id}', 'Brand_Delete')->name('brand.delete');
            });
        });

        // Role Route Section Start //
        Route::group(['prefix' => 'role'], function () {
            // User Route Section
            Route::controller(RoleUserController::class)->group(function () {
                Route::get('/view', 'Role_View')->name('role.view');
                Route::get('/create', 'Role_Create')->name('role.create');
                Route::post('/store', 'Role_Store')->name('role.store');
            });
        });

        // category Route Section Start //
        Route::group(['prefix' => 'category'], function () {
            Route::controller(CategoryController::class)->group(function () {
                Route::get('/view', 'Category_View')->name('Category_View');
                Route::post('/create', 'Add_Category')->name('add_category');
                Route::get('/edit/{slug}', 'Edit_Category')->name('edit_category');
                Route::post('/update/{slug}', 'Update_Category')->name('update_category');
                Route::get('/delete/{slug}', 'Delete_Category')->name('Delete_Category');
            });
        });

        // subcategory Route Section Start //
        Route::group(['prefix' => 'subcategory'], function () {
            Route::controller(SubcategoryController::class)->group(function () {
                Route::get('/view', 'Subategory_View')->name('Subategory_View');
                Route::post('/create', 'Create_Subcategory')->name('create_sub.category');
            });
        });
    });
});
