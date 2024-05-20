<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    TugasController,
    CastController,
};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('tugas.welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('tugas.home');
});

Route::get('/form', [TugasController::class, 'form'])->name('form');

Route::get('/template', function () {
    return view('template.master');
});

Route::controller(CastController::class)->group(function () {
    Route::get('/cast', 'index')->name('cast.index');//namplin list data
    Route::get('/cast/create', 'create')->name('cast.create');// nampilin form add data 
    Route::post('/cast', 'store')->name('cast.store'); // proses menyim form add data
    Route::get('/cast/{cast}/edit', 'edit')->name('cast.edit'); // nampilin form edit data
    Route::get('/cast/{cast}', 'show')->name('cast.show'); // nampilin form detail data
    Route::put('/cast/{cast}', 'update')->name('cast.update');
    Route::delete('/cast/{cast}', 'delete')->name('cast.delete');
});

