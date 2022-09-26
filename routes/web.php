<?php

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

use App\Http\Controllers\PrestadorController;
use App\Http\Controllers\TomadorController;
use App\Http\Controllers\NotaController;

Route::get('/', [PrestadorController::class, 'index'])->name('prestador.index');
Route::get('/prestadores', [PrestadorController::class, 'create'])->name('prestador.create');
Route::post('/prestadores', [PrestadorController::class, 'store'])->name('prestador.store');
Route::delete('/prestadores/{id}', [PrestadorController::class, 'destroy'])->name('prestador.destroy');
Route::get('/prestadores/edit/{id}', [PrestadorController::class, 'edit'])->name('prestador.edit');
Route::put('/prestadores/update/{id}', [PrestadorController::class, 'update'])->name('prestador.update');

Route::get('/tomadores/index', [TomadorController::class, 'index'])->name('tomador.index');
Route::get('/tomadores', [TomadorController::class, 'create'])->name('tomador.create');
Route::post('/tomadores', [TomadorController::class, 'store'])->name('tomador.store');
Route::delete('/tomadores/{id}', [TomadorController::class, 'destroy'])->name('tomador.destroy');
Route::get('/tomadores/edit/{id}', [TomadorController::class, 'edit'])->name('tomador.edit');
Route::put('/tomadores/update/{id}', [TomadorController::class, 'update'])->name('tomador.update');

Route::get('/notas/index', [NotaController::class, 'index'])->name('nota.index');
Route::get('/notas', [NotaController::class, 'create'])->name('nota.create');
Route::post('/notas', [ NotaController::class, 'store'])->name('nota.store');

