<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReabosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/clients', [ClientController::class,'index'])->middleware(['auth'])->name('clients');
Route::get('/clients/create', [ClientController::class,'create'])->middleware(['auth'])->name('create_client');
Route::post('/clients', [ClientController::class,'store'])->middleware(['auth'])->name('store_client');

Route::get('/reabos', [ReabosController::class,'index'])->middleware(['auth'])->name('reabos');
Route::get('/reabos/create', [ReabosController::class,'create'])->middleware(['auth'])->name('create_reabo');

require __DIR__.'/auth.php';
