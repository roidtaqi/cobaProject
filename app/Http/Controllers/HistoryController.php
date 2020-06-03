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

class HistoryController extends Controller
{
     public function __construct(){
        $this->middleware('auth');
    }

    public function konfirmasi(){
        $token = csrf_token();
        $user = User::where('id', $token)->first();

        $pesanan = Pesanan::where('user_id', $token)->where('status', 0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();

        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_details as $pd) {
            $barang = Barang::where('id', $pd->barang_id)->first();
            $barang->stok = $barang->stok-$pd->jumlah;
            $barang->update();
        }

        alert()->success('Berhasil Buat Pesanan', 'Berhasil');
        return redirect('riwayat');
    }

     public function riwayat(){
       $token = csrf_token();
       $pesanans = Pesanan::where('user_id', $token)->where('status', '!=',0)->get();

        return view('pages.riwayat', compact('pesanans'));
    }
}
