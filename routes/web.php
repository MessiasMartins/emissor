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

Route::get('/', [PrestadorController::class, 'index']);
Route::get('/prestadores', [PrestadorController::class, 'create']);
Route::post('/prestadores', [PrestadorController::class, 'store']);
Route::delete('/prestadores/{id}', [PrestadorController::class, 'destroy']);

Route::get('/tomadores/index', [TomadorController::class, 'index']);
Route::get('/tomadores', [TomadorController::class, 'create']);
Route::post('/tomadores', [TomadorController::class, 'store']);

Route::get('/notas', [NotaController::class, 'nota']);
