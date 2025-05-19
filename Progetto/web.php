<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DipartimentiController;

Route::get('/', [HomepageController::class, 'index'])
        ->name('homepage');


Route::view('/chisiamo', 'chisiamo')->name('chisiamo');
Route::view('/specialisti', 'specialisti')->name('specialisti');
Route::get('/dipartimenti', [DipartimentiController::class, 'mostraDip'])
        ->name('dipartimenti');
Route::view('/cardiologia', 'cardiologia')->name('cardiologia');
Route::view('/neurologia', 'neurologia')->name('neurologia');
Route::view('/ortopedia', 'ortopedia')->name('ortopedia');
Route::view('/pediatria', 'pediatria')->name('pediatria');
Route::view('/pneumologia', 'pneumoglia')->name('pneumologia');
Route::view('/radiologia', 'radiologia')->name('radiologia');
Route::view('/login', 'login')->name('login');
