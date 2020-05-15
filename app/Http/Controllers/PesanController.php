<?php

namespace App\Http\Controllers;
use App\Barang;
use App\Pesanan;
use App\PesananDetail;
use App\User;
use Auth;
use SweetAlert;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function pesan(Request $request, $id) {
        $user = Auth::user();

        if(!empty($user)){
            $barang = Barang::where('id',$id)->first();
            $tanggal = Carbon::now();

            //validasi stok
            if ($request->jumlah_pesan > $barang->stok) 
            {
                return back();
            }

            //cek validasi
            $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

            if (empty($cek_pesanan)) 
            {
                //simpan ke database pesanan
                $pesanan = new Pesanan;
                $pesanan->user_id = Auth::user()->id;
                $pesanan->tanggal = $tanggal;
                $pesanan->status = 0;
                $pesanan->jumlah_harga = 0;
                $pesanan->kode = 0;
                $pesanan->save();
            }
            

            //simpan ke database pesanan_detail
            $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

            //cek pesanan detail
            $cek_pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();

            if(empty($cek_pesanan_detail)){
                $pesanan_detail = new PesananDetail;
                $pesanan_detail->barang_id = $barang->id;
                $pesanan_detail->pesanan_id = $pesanan_baru->id;
                $pesanan_detail->jumlah = $request->jumlah_pesan;
                $pesanan_detail->jumlah_harga = $barang->harga*$request->jumlah_pesan;
                $pesanan_detail->save();
            }else
            {
                $pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();

                $pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

                //harga sekarang
                $harga_pesanan_detail_baru = $barang->harga*$request->jumlah_pesan;
                $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
                $pesanan_detail->update();
            }

            //jumlah total (Update DB Pesanan)
            $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
            $pesanan->tanggal = $tanggal;
            $pesanan->jumlah_harga = $pesanan->jumlah_harga+$barang->harga*$request->jumlah_pesan;
            $pesanan->update();

            alert()->success('Produk Masuk Ke Keranjang', 'Berhasil');
            return redirect('cart');

            }else{
                alert()->warning('Login Untuk Melanjutkan', 'Peringatan');
                return redirect('login');
            }	
    }

    public function cart(){
        $user = Auth::user();

        if (!empty($user)){
            $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

            if (empty ($pesanan)) 
            {
                alert()->info('Anda Belum Pernah Berbelanja', 'Informasi');
                return back();
            }else{

                $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
                return view('pages.cart', compact('pesanan','pesanan_details'));
            }
        }

		alert()->info('Anda Belum Pernah Berbelanja', 'Informasi');
        return back();
    }

    public function delete($id){
    	$pesanan_detail = PesananDetail::where('id', $id)->first();

    	$pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
    	$pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
    	$pesanan->kode = $pesanan->kode-$pesanan->kode;
        $pesanan->tanggal = null;
    	$pesanan->update();

    	$pesanan_detail->delete();

    	alert()->error('Produk Dihapus Dari Keranjang', 'Hapus');
    	return redirect('cart');
    }

    public function konfirmasi(){
    	$user = User::where('id', Auth::user()->id)->first();

    	if(empty($user->alamat)){
    		alert()->error('Lengkapi data terlebih dahulu', 'Gagal');
    		return redirect('edit');
    	}

    	if(empty($user->no_hp)){
    		alert()->error('Lengkapi data terlebih dahulu', 'Gagal');
    		return redirect('edit');
    	}

    	$pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
    	$pesanan_id = $pesanan->id;
    	$pesanan_total = $pesanan->jumlah_harga;
    	$pesanan_kode = $pesanan->kode =  mt_rand(100, 999);

    	// $pesanan->status = 1;
    	$pesanan->update();

    	$pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
    	foreach ($pesanan_details as $pd) {
    		$barang = Barang::where('id', $pd->barang_id)->first();
    		$barang->stok = $barang->stok-$pd->jumlah;
    		$barang->update();
    	}

    	if ($pesanan->jumlah_harga==0) {
    		alert()->info('Belum ada data belanja', 'Informasi');
    		return back();
    	}

    	alert()->success('Silahkan lanjutkan pembayaran', 'Berhasil');
    	return redirect('checkout');
    }
}
