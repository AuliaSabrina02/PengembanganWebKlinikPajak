<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layoutsabrinaController extends Controller
{
    public function index(Request $request)
    {
        // Lakukan sesuatu untuk mendapatkan data
        $dataBarang = [
            ['id' => 1, 'nama' => 'Beras Perdana Wangi', 'harga' => 15000],
            ['id' => 2, 'nama' => 'Tepung Terigu', 'harga' => 20000],
            ['id' => 3, 'nama' => 'Baygon cair', 'harga' => 13500],
            ['id' => 4, 'nama' => 'Penyedap royco', 'harga' => 3200],
            ['id' => 5, 'nama' => 'Minyak Goreng', 'harga' => 14000],
        ];

        return view('list_product', compact('dataBarang'));
    }

    public function tampilkan()
    {
        return $this->index(request());
    }
}



           
       

      





