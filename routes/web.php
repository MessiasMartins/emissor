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

Route::get('/prestadores', [PrestadorController::class, 'prestador']);
Route::get('/tomadores', [TomadorController::class, 'tomador']);
Route::get('/notas', [NotaController::class, 'nota']);
