<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DipartimentiController;
use App\Http\Controllers\SpecialistiController;

Route::get('/', [HomepageController::class, 'index'])
        ->name('homepage');


Route::view('/chisiamo', 'chisiamo')->name('chisiamo');
Route::get('/specialisti', [SpecialistiController::class, 'mostraSpec'])
        ->name('specialisti');
Route::get('/dipartimenti', [DipartimentiController::class, 'mostraDip'])
        ->name('dipartimenti');
Route::get('/dipartimenti/{id}', [DipartimentiController::class, 'show'])
        ->name('dipartimenti1');
Route::get('/prestazione/{id}', [DipartimentiController::class, 'mostraPre'])
        ->name('prestazioni');
Route::view('/cardiologia', 'cardiologia')->name('cardiologia');
Route::view('/neurologia', 'neurologia')->name('neurologia');
Route::view('/ortopedia', 'ortopedia')->name('ortopedia');
Route::view('/pediatria', 'pediatria')->name('pediatria');
Route::view('/pneumologia', 'pneumoglia')->name('pneumologia');
Route::view('/radiologia', 'radiologia')->name('radiologia');
Route::view('/login', 'login')->name('login');
