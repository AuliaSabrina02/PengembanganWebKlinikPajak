<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'tblproduk';
    protected $fillable = ['nama', 'deskripsi', 'harga'];
    public $timestamps = false; 
}

?>