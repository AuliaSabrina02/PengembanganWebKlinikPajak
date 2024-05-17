<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\layoutsabrinaController;
Use App\Http\Controllers\ListProdukController;



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
    return view('list_product');
});

Route::get('/layoutlistaulia', [layoutsabrinaController::class, 'tampilkan']);
Route::get('/listproduk', [ListProdukController::class, 'show']);
