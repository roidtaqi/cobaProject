<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    protected $fillable = [
        '_token',
    ];

	public function barang()
    {
    	return $this->belongsTo('App\Barang', 'barang_id', 'id');
    }

    public function pesanan()
    {
    	return $this->belongsTo('App\Pesanan', 'pesanan_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function gambar()
    {
        return $this->belongsTo('App\Gambar', 'gambar_id', 'id');
    }

    public function getRIdAttribute($pesanan_detail) {
        return $pesanan_detail;
    }
}
