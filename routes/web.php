<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ElectromechController;

Route::get('/', function () {
    return view('frontend.home');
});
// admin part
Route::get('admin/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('admin/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('admin.logout');

Route::get('admin/change-password', 'App\Http\Controllers\Auth\ChangePasswordController@changePassword')->name('admin.change-password');
Route::post('admin/change-password', 'App\Http\Controllers\Auth\ChangePasswordController@updatePassword')->name('admin.update-password');

Route::get('admin/password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin/password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/password/reset/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset')->name('admin.password.update');

// member part
Route::get('member/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('member.login');
Route::post('member/login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('member/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('member.logout');

Route::get('member/change-password', 'App\Http\Controllers\Auth\ChangePasswordController@changePassword')->name('member.change-password');
Route::post('member/change-password', 'App\Http\Controllers\Auth\ChangePasswordController@updatePassword')->name('member.update-password');

Route::get('member/password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('member.password.request');
Route::post('member/password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('member.password.email');
Route::get('member/password/reset/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@showResetForm')->name('member.password.reset');
Route::post('member/password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset')->name('member.password.update');

//Electrotech
Route::get('/home', [ElectromechController::class, 'index']);
Route::get('/contact', [ElectromechController::class, 'contacts']);
Route::get('/ongoingproject', [ElectromechController::class, 'ongoings'])->name('ongoing');
Route::get('/bod', [ElectromechController::class, 'BOD'])->name('bods');
Route::get('/video', [ElectromechController::class, 'videos'])->name('video');
Route::get('/completedproject', [ElectromechController::class, 'completeproject'])->name('completed');
Route::get('/page2', [ElectromechController::class, 'completeproject'])->name('page2');
Route::get('/page3', [ElectromechController::class, 'completeproject'])->name('page3');
Route::get('/news', [ElectromechController::class, 'new'])->name('news');
Route::get('/certification', [ElectromechController::class, 'certificate'])->name('certifications');
Route::get('/glance', [ElectromechController::class, 'glances'])->name('glance');
Route::get('/manufacture', [ElectromechController::class, 'manufact'])->name('maanufacture');
Route::get('/maintain', [ElectromechController::class, 'maintains'])->name('maintaining');
Route::get('/supply', [ElectromechController::class, 'suppply'])->name('supply');
Route::get('/testing', [ElectromechController::class, 'test'])->name('testings');
Route::get('/transformers', [ElectromechController::class, 'transform'])->name('transforms');
Route::get('/world-super', [ElectromechController::class, 'world'])->name('worlds');