<?php

use Illuminate\Support\Facades\Route;

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
