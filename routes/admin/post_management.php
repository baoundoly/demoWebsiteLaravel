<?php
// member
Route::prefix( 'post-info' )->name( 'post-info.' )->group( function () {
    Route::get( '/list', 'PostController@list' )->name( 'list' );
    Route::get( '/add', 'PostController@add' )->name( 'add' );
    Route::post( '/store', 'PostController@store' )->name( 'store' );
    Route::get( '/edit/{editData}', 'PostController@edit' )->name( 'edit' );
    Route::post( '/update/{editData}', 'PostController@update' )->name( 'update' );
    Route::post( '/destroy', 'PostController@destroy' )->name( 'destroy' );
});
