<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/makers', [MakerController::class, 'index'])->name('makers.index');

//route-ok létrehozása
Route::resource('makers', MakerController::class);
Route::get('/makers/create', [MakerController::class, 'create'])->name('makers.create');
Route::patch('/makers/{maker}', [MakerController::class, 'update'])->name('makers.update');
Route::delete('/makers/{maker}', [MakerController::class, 'destroy'])->name('makers.destroy');
//Route::resource('fuels', FuelController::class);
//Route::resource('models', ModelController::class);
//Route::resource('bodies', BodyController::class);