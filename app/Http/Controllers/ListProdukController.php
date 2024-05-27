<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    public function show() 
    {
        $produk = Produk::all();
        return view('list_produk', ['produk' => $produk]);
    }

    public function simpan(Request $request) 
    {
        $produk = new Produk;
        $produk->nama = $request->input('nama');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->harga = $request->input('harga');
        $produk->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
    
    public function delete($id){

        $produk = Produk::where('id', $id)->first();
        if ($produk) {
            $produk->delete();
            return redirect()->back()->with('succes', 'produk berhasil di hapus.');
        }else{
            return redirect()->back()->with('error', 'produk tidak ditemukan');
        }
    }

}
