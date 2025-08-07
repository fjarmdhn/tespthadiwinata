<?php

use App\Http\Controllers\TesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('tes', TesController::class);
Route::get('/tes', [TesController::class, 'index'])->name('tes.index');
Route::get('/tes/create', [TesController::class, 'create'])->name('tes.create');
Route::post('/tes', [TesController::class, 'store'])->name('tes.store');
Route::get('/tes/{id}/edit', [TesController::class, 'edit'])->name('tes.edit');
Route::put('/tes/{id}', [TesController::class, 'update'])->name('tes.update');
Route::delete('/tes/{id}', [TesController::class, 'destroy'])->name('tes.destroy');
