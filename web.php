<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\SpecialistiController;
use App\Http\Controllers\EsempioController;

Route::get('/', [HomepageController::class, 'index'])
        ->name('homepage');


Route::view('/chisiamo', 'chisiamo')->name('chisiamo');
Route::get('/specialisti', [EsempioController::class, 'index'])->name('specialisti');
Route::view('/dipartimenti', 'dipartimenti')->name('dipartimenti');
Route::view('/cardiologia', 'cardiologia')->name('cardiologia');
Route::view('/neurologia', 'neurologia')->name('neurologia');
Route::view('/ortopedia', 'ortopedia')->name('ortopedia');
Route::view('/pediatria', 'pediatria')->name('pediatria');
Route::view('/pneumologia', 'pneumoglia')->name('pneumologia');
Route::view('/radiologia', 'radiologia')->name('radiologia');
Route::view('/login', 'login')->name('login');
