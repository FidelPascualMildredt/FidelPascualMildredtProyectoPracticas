<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\NegocioController;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('categoria', CategoriaController::class);

Route::resource('rol', RolController::class);

Route::resource('negocio', NegocioController::class);
Route::resource('status', StatusController::class);

// solitarios
Route::get('mirutaapi',[RolController::class,'index'])->name('rol');
Route::post('mirutaapi',[RolController::class,'index'])->name('rol');
Route::put('mirutaapi',[RolController::class,'index'])->name('rol');
Route::delete('mirutaapi',[RolController::class,'index'])->name('rol');
