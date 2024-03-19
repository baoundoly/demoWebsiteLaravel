<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::name('site-setting-management.')->prefix('site-setting-management')->namespace('SiteSettingManagement')->group(base_path('routes/admin/site_setting_management.php'));
Route::name('role-management.')->prefix('role-management')->namespace('RoleManagement')->group(base_path('routes/admin/role_management.php'));
Route::name('profile-management.')->prefix('profile-management')->namespace('ProfileManagement')->group(base_path('routes/admin/profile_management.php'));
Route::name('user-management.')->prefix('user-management')->namespace('UserManagement')->group(base_path('routes/admin/user_management.php'));
Route::name('member-management.')->prefix('member-management')->namespace('MemberManagement')->group(base_path('routes/admin/member_management.php'));
Route::name('content-management.')->prefix('content-management')->namespace('ContentManagement')->group(base_path('routes/admin/content_management.php'));
Route::name('post-management.')->prefix('post-management')->namespace('PostManagement')->group(base_path('routes/admin/post_management.php'));
Route::name('home-management.')->prefix('home-management')->namespace('HomeManagement')->group(base_path('routes/admin/home_management.php'));


// admin home electro
// slider
// Route::get('/slider', function () {
//     return view('admin.slider');
// });
// Route::post('/slider/create', [SliderController::class, 'store'])->name('slider.create');
// Route::get('/admin/view/slist', [SliderController::class, 'seeSlider'])->name('sliderlist');

// Route::get('/slider/{id}/edit', [SliderController::class, 'edit'])->name('slider.edit');
// Route::post('/slider/{id}/update', [SliderController::class, 'update'])->name('slider.update');
// Route::post('/slider/{id}/delete', [SliderController::class, 'delete'])->name('slider.delete');

// about
// Route::get('/about', function () {
//     return view('admin.about');
// });
// Route::post('/about/create', [AboutController::class, 'store'])->name('about.create');
// Route::get('/admin/view/alist', [AboutController::class, 'seeAbout'])->name('aboutlist');

// Route::get('/about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
// Route::post('/about/{id}/update', [AboutController::class, 'update'])->name('about.update');
// Route::post('/about/{id}/delete', [AboutController::class, 'delete'])->name('about.delete');

// product
// Route::get('/product', function () {
//     return view('admin.product');
// });
// Route::post('/product/create', [ProductController::class, 'store'])->name('product.create');
// Route::get('/admin/view/plist', [ProductController::class, 'seeProduct'])->name('productlist');

// Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
// Route::post('/product/{id}/update', [ProductController::class, 'update'])->name('product.update');
// Route::post('/product/{id}/delete', [ProductController::class, 'delete'])->name('product.delete');

// services

