<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;


Route::get('/', function () {
    return view('list_product');
});


Route::get('/listproduk', [ListProdukController::class, 'show'])->name('produk.show');
Route::post('/listproduk', [ListProdukController::class, 'simpan'])->name('produk.simpan');
Route::delete('/listproduk/{id}', [ListProdukController::class, 'delete'])->name('produk.delete');



