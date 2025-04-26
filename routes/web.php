<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('motels.index');
});

Route::controller('App\Http\Controllers\MotelController')->group(function () {
    Route::get('/motels', 'index')->name('motels.index');
    Route::get('/motels/create', 'create')->name('motels.create');
    Route::post('/motels/store', 'store')->name('motels.store');
    Route::get('/motels/{motel}', 'show')->name('motels.show');
    Route::get('/motels/{motel}/edit', 'edit')->name('motels.edit');
    Route::put('/motels/{motel}', 'update')->name('motels.update');
    Route::delete('/motels/{motel}', 'destroy')->name('motels.destroy');
});
