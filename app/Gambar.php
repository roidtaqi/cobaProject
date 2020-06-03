<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = "gambar";
 
    protected $fillable = ['file'];

    public function pesanan_detail()
    {
    	return $this->hasMany('App\PesananDetail', 'gambar_id', 'id');
    }

    public function pesanan()
    {
    	return $this->belongsTo('App\Pesanan', 'pesanan_id', 'id');
    }
}
