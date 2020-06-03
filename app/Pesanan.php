<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $fillable = [
        'resi',
        'kurir',
        'jumlah_harga',
        'file',
    	'status_kirim'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function pesanan_detail()
    {
    	return $this->hasMany('App\PesananDetail', 'pesanan_id', 'id');
    }

    public function gambar()
    {
        return $this->hasOne('App\Pesanan', 'pesanan_id', 'id');
    }
}
