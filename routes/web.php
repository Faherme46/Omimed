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

Route::get('/', function () {
    return 'HOME PAGE';
});

Route::get('productos', [userController::class,'listProducts'] );

Route::get('productos/detalle', [userController::class,'detalle'] );




Route::get('productos/{id}', function ($id) {
    return "el nombre del producto es: $id";
});

Route::get('productos/{id}/{categoria}', function ($id,$categoria) {
    return "el nombre del producto es: $id con la categoria $categoria";
});

