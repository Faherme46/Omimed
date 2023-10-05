<?php


namespace App\Http\Controllers;
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

Route::get('/', [userController::class,'firstMethod']);
Route::post('login', [PostController::class,'loguear']);

Route::get('login', [userController::class,'firstMethod'] );
Route::get('tv', [userController::class,'televisor'] );
Route::get('doctores',[userController::class,'doctores'])->name('doctores');

Route::get('productos/detalle', [userController::class,'detalle'] );

Route::get('productos/{id}', function ($id) {
    return "el nombre del producto es: $id";
});

Route::get('productos/{id}/{categoria}', function ($id,$categoria) {
    return "el nombre del producto es: $id con la categoria $categoria";
});

