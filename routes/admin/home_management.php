<?php
// member
Route::prefix( 'slider-info' )->name( 'slider-info.' )->group( function () {
    Route::get( '/list', 'SliderController@list' )->name( 'list' );
    Route::get( '/add', 'SliderController@add' )->name( 'add' );
    Route::post( '/store', 'SliderController@store' )->name( 'store' );
    Route::get( '/edit/{editData}', 'SliderController@edit' )->name( 'edit' );
    Route::post( '/update/{editData}', 'SliderController@update' )->name( 'update' );
    Route::post( '/destroy', 'SliderController@destroy' )->name( 'destroy' );
});
Route::prefix( 'about-info' )->name( 'about-info.' )->group( function () {
    Route::get( '/list', 'AboutController@list' )->name( 'list' );
    Route::get( '/add', 'AboutController@add' )->name( 'add' );
    Route::post( '/store', 'AboutController@store' )->name( 'store' );
    Route::get( '/edit/{editData}', 'AboutController@edit' )->name( 'edit' );
    Route::post( '/update/{editData}', 'AboutController@update' )->name( 'update' );
    Route::post( '/destroy', 'AboutController@destroy' )->name( 'destroy' );
});
Route::prefix( 'product-info' )->name( 'product-info.' )->group( function () {
    Route::get( '/list', 'ProductController@list' )->name( 'list' );
    Route::get( '/add', 'ProductController@add' )->name( 'add' );
    Route::post( '/store', 'ProductController@store' )->name( 'store' );
    Route::get( '/edit/{editData}', 'ProductController@edit' )->name( 'edit' );
    Route::post( '/update/{editData}', 'ProductController@update' )->name( 'update' );
    Route::post( '/destroy', 'ProductController@destroy' )->name( 'destroy' );
});
Route::prefix( 'stock-info' )->name( 'stock-info.' )->group( function () {
    Route::get( '/list', 'StockController@list' )->name( 'list' );
    Route::get( '/add', 'StockController@add' )->name( 'add' );
    Route::post( '/store', 'StockController@store' )->name( 'store' );
    Route::get( '/edit/{editData}', 'StockController@edit' )->name( 'edit' );
    Route::post( '/update/{editData}', 'StockController@update' )->name( 'update' );
    Route::post( '/destroy', 'StockController@destroy' )->name( 'destroy' );
});
Route::prefix( 'project-info' )->name( 'project-info.' )->group( function () {
    Route::get( '/list', 'ProjectController@list' )->name( 'list' );
    Route::get( '/add', 'ProjectController@add' )->name( 'add' );
    Route::post( '/store', 'ProjectController@store' )->name( 'store' );
    Route::get( '/edit/{editData}', 'ProjectController@edit' )->name( 'edit' );
    Route::post( '/update/{editData}', 'ProjectController@update' )->name( 'update' );
    Route::post( '/destroy', 'ProjectController@destroy' )->name( 'destroy' );
});
Route::prefix( 'service-info' )->name( 'service-info.' )->group( function () {
    Route::get( '/list', 'ServiceController@list' )->name( 'list' );
    Route::get( '/add', 'ServiceController@add' )->name( 'add' );
    Route::post( '/store', 'ServiceController@store' )->name( 'store' );
    Route::get( '/edit/{editData}', 'ServiceController@edit' )->name( 'edit' );
    Route::post( '/update/{editData}', 'ServiceController@update' )->name( 'update' );
    Route::post( '/destroy', 'ServiceController@destroy' )->name( 'destroy' );
});
Route::prefix( 'image-info' )->name( 'image-info.' )->group( function () {
    Route::get( '/list', 'ImageController@list' )->name( 'list' );
    Route::get( '/add', 'ImageController@add' )->name( 'add' );
    Route::post( '/store', 'ImageController@store' )->name( 'store' );
    Route::get( '/edit/{editData}', 'ImageController@edit' )->name( 'edit' );
    Route::post( '/update/{editData}', 'ImageController@update' )->name( 'update' );
    Route::post( '/destroy', 'ImageController@destroy' )->name( 'destroy' );
});
