<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';

    // $fillable = mass-assignment = menyimpan beberapa kolom secara bersamaan
    protected $fillable = [
    	'kodebarang',
        'namabarang',
        'kategori',
    	'harga',
        'stok',
        'gambar'
    ];
}
