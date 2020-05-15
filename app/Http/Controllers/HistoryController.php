<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Pesanan;
use App\PesananDetail;
use App\User;
use Auth;
use SweetAlert;
use Carbon\Carbon;
use App\Kategori;

class HistoryController extends Controller
{
     public function __construct(){
    	$this->middleware('auth');
    }

    public function checkout(){
    $pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
    
    //Untuk menampilkan kategori
    $kategori = Kategori::all();

    $pesanan_id = $pesanans->id;

    $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
    	foreach ($pesanan_details as $pd) {
    		$barang = Barang::where('id', $pd->barang_id)->first();
    	}
    	
    	return view('pages.checkout', compact('pesanans', 'pesanan_details','kategori'));
    }

    public function detail($id){
    	$pesanans = Pesanan::where('id', $id)->first();
        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
        
        //Untuk menampilkan kategori
        $kategori = Kategori::all();

    	return view('pages.history', compact('pesanans','pesanan_details','kategori'));
    }
}
