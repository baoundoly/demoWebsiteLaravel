<?php
// user
Route::prefix( 'manage-page' )->name( 'manage-page.' )->group( function () {
    Route::get( '/list', 'PageController@list' )->name( 'list' );
    Route::get( '/add', 'PageController@add' )->name( 'add' );
    Route::post( '/store', 'PageController@store' )->name( 'store' );
    Route::get( '/edit/{editData}', 'PageController@edit' )->name( 'edit' );
    Route::post( '/update/{editData}', 'PageController@update' )->name( 'update' );
    Route::post( '/destroy', 'PageController@destroy' )->name( 'destroy' );
});
