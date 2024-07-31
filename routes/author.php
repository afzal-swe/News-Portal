<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\RoleUserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubcategoryController;
use App\Http\Controllers\Backend\DistrictController;
use App\Http\Controllers\Backend\SubDistrictController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\SocialController;
use App\Http\Controllers\Backend\SeoController;
use App\Http\Controllers\Backend\prayerController;
use App\Http\Controllers\Backend\LivetvController;
use App\Http\Controllers\Backend\NoticesController;
use App\Http\Controllers\Backend\WebsiteController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\VideoController;
use App\Http\Controllers\Backend\AdsController;
use App\Http\Controllers\Backend\SettingsController;


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
                Route::get('/edit/{id}', 'Subcategory_Edit')->name('subcategory.edit');
                Route::post('/update/{id}', 'Update_Subcategory')->name('update_subcategory');
                Route::get('/delete/{id}', 'Subcategory_Delete')->name('subcategory.delete');
            });
        });

        // District Route Section Start //
        Route::group(['prefix' => 'district'], function () {
            Route::controller(DistrictController::class)->group(function () {
                Route::get('/view', 'District_View')->name('District_View');
                Route::post('/create', 'Add_District')->name('add_district');
                Route::get('/edit/{slug}', 'District_Edit')->name('district.edit');
                Route::post('/update/{slug}', 'District_Update')->name('district.update');
                Route::get('/delete/{slug}', 'District_Delete')->name('district.delete');
            });
        });

        // Sub-District Route Section Start //
        Route::group(['prefix' => 'sub-district'], function () {
            Route::controller(SubDistrictController::class)->group(function () {
                Route::get('/view', 'District_View')->name('Sub_district_View');
                Route::post('/create', 'Add_Sub_District')->name('add_sub_district');
                Route::get('/edit/{slug}', 'Sub_District_Edit')->name('sub_district.edit');
                Route::post('/update/{slug}', 'Sub_District')->name('sub_district.update');
                Route::get('/delete/{slug}', 'Sub_District_Delete')->name('sub_district.delete');
            });
        });

        // Post Route Section Start //
        Route::group(['prefix' => 'post'], function () {
            Route::controller(PostController::class)->group(function () {
                Route::get('/view', 'All_Post')->name('post.view');
                Route::get('/create', 'Create_Post')->name('post.create');
                Route::post('/store', 'Post_Create')->name('post.store');
                Route::get('/edit/{id}', 'Post_Edit')->name('post.edit');
                Route::post('/update/{id}', 'Post_Update')->name('post.update');
                Route::get('/delete/{id}', 'Post_Delete')->name('post.delete');
            });
        });

        // Photos Route Section Start //
        Route::group(['prefix' => 'photo'], function () {
            Route::controller(GalleryController::class)->group(function () {
                Route::get('/gallery', 'Photos_Gallery')->name('photos.gallery');
                Route::post('/store', 'Store_Photos')->name('store.photos');
                Route::get('/edit/{id}', 'Photo_Gallery_Edit')->name('photos.edit');
                Route::post('/update/{id}', 'Photo_Update')->name('photo.update');
                Route::get('/delete/{id}', 'Gallery_Delete')->name('gallery.delete');
            });
        });

        // Videos Route Section Start //
        Route::group(['prefix' => 'video'], function () {
            Route::controller(VideoController::class)->group(function () {
                Route::get('/gallery', 'Video_Gallery')->name('video.gallery');
                Route::post('/store', 'Store_Video')->name('video.store');
                Route::get('/edit/{id}', 'Video_Edit')->name('video.edit');
                Route::post('/update/{id}', 'Video_Update')->name('video.update');
                Route::get('/delete/{id}', 'Video_Delete')->name('video.delete');
            });
        });

        // Videos Route Section Start //
        Route::group(['prefix' => 'ads'], function () {
            Route::controller(AdsController::class)->group(function () {
                Route::get('/', 'Manage_Ads')->name('manage.ads');
                Route::post('/store', 'Store_Ads')->name('store.ads');
                Route::get('/edit/{id}', 'Ads_Edit')->name('ads.edit');
                Route::post('/update/{id}', 'Ads_Update')->name('ads.update');
                Route::get('/delete/{id}', 'Ads_Delete')->name('ads.delete');
            });
        });

        // Website Route Section Start //
        Route::group(['prefix' => 'website-info'], function () {
            Route::controller(SettingsController::class)->group(function () {
                Route::get('/', 'Website_Info')->name('website.info');
                Route::post('/store', 'Website_info_Store')->name('website_info.store');
                Route::post('/update/{id}', 'Website_Info_Update')->name('website_info.update');
            });
        });

        // Setting Route Section Start
        Route::group(['prefix' => 'setting'], function () {
            // Social Route Section Start //
            Route::group(['prefix' => 'social'], function () {
                Route::controller(SocialController::class)->group(function () {
                    Route::get('/', 'Social_Create')->name('social.option');
                    Route::post('/store', 'Social_Store')->name('social.add');
                    Route::post('/update/{id}', 'Social_Update')->name('social.update');
                });
            });

            // Seo Route Section Start //
            Route::group(['prefix' => 'seo'], function () {
                Route::controller(SeoController::class)->group(function () {
                    Route::get('/', 'Seo_Create')->name('seo.create');
                    Route::post('/store', 'Seo_Store')->name('seo.store');
                    Route::post('/update/{id}', 'Seo_Update')->name('seo.update');
                });
            });

            // Prayer Route Section Start //
            Route::group(['prefix' => 'prayer'], function () {
                Route::controller(prayerController::class)->group(function () {
                    Route::get('/', 'Prayer_Create')->name('prayer.create');
                    Route::post('/store', 'Prayer_Store')->name('prayer.store');
                    Route::post('/update/{id}', 'Prayer_Update')->name('prayer.update');
                });
            });

            // Live TV Route Section Start //
            Route::group(['prefix' => 'live-tv'], function () {
                Route::controller(LivetvController::class)->group(function () {
                    Route::get('/', 'Live_TV')->name('livetv.option');
                    Route::post('/store', 'Livetv_Store')->name('livetv.store');
                    Route::post('/update/{id}', 'Livetv_Update')->name('livetv.update');
                });
            });

            // Notice Route Section Start //
            Route::group(['prefix' => 'notice'], function () {
                Route::controller(NoticesController::class)->group(function () {
                    Route::get('/', 'Notice')->name('notice');
                    Route::post('/store', 'Notice_Store')->name('notice.store');
                    Route::post('/update/{id}', 'Notice_Update')->name('notice.update');
                });
            });

            // website Route Section Start //
            Route::group(['prefix' => 'website'], function () {
                Route::controller(WebsiteController::class)->group(function () {
                    Route::get('/', 'Website')->name('website');
                    Route::get('/create', 'Website_create')->name('website.create');
                    Route::post('/store', 'Website_Store')->name('website.store');
                    Route::get('/edit/{id}', 'Website_Edit')->name('website.edit');
                    Route::post('/update/{id}', 'Website_Update')->name('website.update');
                    Route::get('/delete/{id}', 'Website_Delete')->name('website.delete');
                });
            });
        });
        // Setting Route Section End
    });
});
