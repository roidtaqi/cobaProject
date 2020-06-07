<?php

namespace App\Http\Controllers;
use App\Barang;
use App\Pesanan;
use App\PesananDetail;
use App\User;
use Auth;
use App\Kategori;
use App\Gambar;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function checkout(){
    $token = csrf_token();
    $pesanans = Pesanan::where('user_id', $token)->where('status', 0)->first();

    $pesanan_id = $pesanans->id;

    $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_details as $pd) {
            $barang = Barang::where('id', $pd->barang_id)->first();
        }
        
        return view('pages.checkout', compact('pesanans', 'pesanan_details'));
    }

    public function detail($id){
        $pesanan = Pesanan::where('id', $id)->first();
        $pesanan->user_id = Auth::user()->id;
        $pesanan->update();

        $kategori = Kategori::all();
        
        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

        return view('pages.rincian', compact('pesanan','pesanan_details','kategori'));
    }

    public function kirim($id){
        $pesanan = Pesanan::where('id', $id)->first();
        // $pesan_resi = $pesanan->resi;

        // if (empty($pesan_resi)) {
        //     $pesanan->resi = mt_rand(11111111, 22222222);
        //     $pesanan_status_kirim = 1;
        //     $pesanan->update();
        // }
        
        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

        $kategori = Kategori::all();

        return view('pages.lacak', compact('pesanan','pesanan_details','kategori'));
    }

        public function bayar($id){
        $pesanan = Pesanan::where('id', $id)->first();
        // $pesan_resi = $pesanan->resi;

        // if (empty($pesan_resi)) {
        //     $pesanan->resi = mt_rand(11111111, 22222222);
        //     $pesanan_status_kirim = 1;
        //     $pesanan->update();
        // }
        
        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

        $kategori = Kategori::all();

        return view('pages.bayar', compact('pesanan','pesanan_details','kategori'));
    }

    public function proses_upload($id, Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'user_id' => 'required',
			'tanggal' => 'required|min:1',
			'status' => 'required|min:1',
			'kode' => 'required|min:1',
			'jumlah_harga' => 'required|min:1',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'uploads';
        $file->move($tujuan_upload,$nama_file);
        
        $pesanan = Pesanan::where('id', $id)->first();
        $pesanan->status = 2;

		$pesanan = Pesanan::find($id);
		$pesanan->file = $nama_file;
		$pesanan->user_id = $request->user_id;
		$pesanan->tanggal = $request->tanggal;
		$pesanan->status = $request->status;
		$pesanan->kode = $request->kode;
		$pesanan->jumlah_harga = $request->jumlah_harga;
		$pesanan->resi = $request->resi;
		$pesanan->kurir = $request->kurir;
		$pesanan->status_kirim = $request->status_kirim;
        $pesanan->save();
        alert()->success('Mohon Tunggu Konfirmasi Selanjutnya.','Anda Telah Mengupload Bukti Pembayaran');
		return redirect()->back();
	}

    public function pesan(Request $request, $id) {

            $barang = Barang::where('id',$id)->first();
            $tanggal = Carbon::now();

            //validasi stok
            if ($request->jumlah_pesan > $barang->stok) 
            {
                return back();
            }

            //cek validasi
            $cek_pesanan = Pesanan::where('user_id', $request->user_id)->where('status', 0)->first();


            if (empty($cek_pesanan)) 
            {
                //simpan ke database pesanan
                $pesanan = new Pesanan;
                $pesanan->user_id = $request->user_id;
                $pesanan->tanggal = $tanggal;
                $pesanan->status = 0;
                $pesanan->jumlah_harga = 0;
                $pesanan->kode = 0;
                $pesanan->save();
            }
            

            //simpan ke database pesanan_detail
            $pesanan_baru = Pesanan::where('user_id', $request->user_id)->where('status', 0)->first();

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
            $pesanan = Pesanan::where('user_id', $request->user_id)->where('status', 0)->first();
            $pesanan->tanggal = $tanggal;
            $pesanan->jumlah_harga = $pesanan->jumlah_harga+$barang->harga*$request->jumlah_pesan;
            $pesanan->update();

            alert()->success('Produk Masuk Ke Keranjang', 'Berhasil');
            return redirect('cart');
    }

    public function cart(){
        $user = Auth::user();

        $token = csrf_token();

        $kategori = Kategori::all();

        $pesanan = Pesanan::where('user_id',$token)->where('status',0)->first();
        if (empty($pesanan)) {
            alert()->info('Anda Belum Pernah Berbelanja', 'Informasi');
            return back();
            
        }else{
             $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
            return view('pages.cart', compact('pesanan','pesanan_details','kategori'));
        }
        

  //       if (!empty($user)){
  //           $pesanan = Pesanan::where('user_id',$token)->where('status',0)->first();

  //           if (empty ($pesanan)) 
  //           {
  //               alert()->info('Anda Belum Pernah Berbelanja', 'Informasi');
  //               return back();
  //           }else{

  //               $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
  //               return view('pages.cart', compact('pesanan','pesanan_details'));
  //           }
  //       }

        // alert()->info('Anda Belum Pernah Berbelanja', 'Informasi');
  //       return back();
    }

    public function delete($id){
        $pesanan_detail = PesananDetail::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
        $pesanan->kode = $pesanan->kode-$pesanan->kode;
        $pesanan->tanggal = null;
        $pesanan->update();

        PesananDetail::where('id',$id)->delete();

        alert()->error('Produk Dihapus Dari Keranjang', 'Hapus');
        return redirect('cart');
    }

    public function riwayat(){
       $token = csrf_token();
       $user = Auth::user();
       $kategori = Kategori::all();

       if (empty($user)) {
           $pesanans = Pesanan::where('user_id', $token)->where('status', '!=',0)->get();
       }else{
            $pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status', '!=',0)->get();
       }
      

        return view('pages.riwayat', compact('pesanans','kategori'));
    }

    public function konfirmasi1(){
        $token = csrf_token();
        $user = User::where('id', $token)->first();

        $pesanan = Pesanan::where('user_id', $token)->where('status', 0)->first();
        $pesanan_id = $pesanan->id;

        if (empty(Auth::user())) {
            $pesanan_id = $pesanan->id;
            $pesanan->status = 1;
            $pesanan->status_kirim = 0;
            $pesanan->update();

            $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
            foreach ($pesanan_details as $pd) {
            $barang = Barang::where('id', $pd->barang_id)->first();
            $barang->stok = $barang->stok-$pd->jumlah;
            $barang->update();
            }

            alert()->warning('Klik detail rincian untuk melanjutkan', 'Perhatian');
            return redirect('riwayat');
        }

        if (!empty(Auth::user())) {
            $pesanan->user_id = Auth::user()->id;
            $pesanan->status = 1;
            $pesanan->status_kirim = 0;
            $pesanan->update();

            $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
            foreach ($pesanan_details as $pd) {
            $barang = Barang::where('id', $pd->barang_id)->first();
            $barang->stok = $barang->stok-$pd->jumlah;
            $barang->update();

            alert()->success('Berhasil Buat Pesanan', 'Berhasil');
            return redirect('riwayat');

            
            }
        }
    }

    public function konfirmasi(){
        $token = csrf_token();
        // $user = User::where('id', $token )->first();

        // if(empty($user->alamat)){
        //  alert()->error('Lengkapi data terlebih dahulu', 'Gagal');
        //  return redirect('edit');
        // }

        // if(empty($user->no_hp)){
        //  alert()->error('Lengkapi data terlebih dahulu', 'Gagal');
        //  return redirect('edit');
        // }
        
        $pesanan = Pesanan::where('user_id',$token)->where('status',0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan_total = $pesanan->jumlah_harga;
        $pesanan_kode = $pesanan->kode =  mt_rand(11111, 22222);


        // $pesanan->status = 1;
        $pesanan->update();

        // $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        // foreach ($pesanan_details as $pd) {
        //  $barang = Barang::where('id', $pd->barang_id)->first();
        //  $barang->stok = $barang->stok-$pd->jumlah;
        //  $barang->update();
        // }

        if ($pesanan->jumlah_harga==0) {
            alert()->info('Belum ada data belanja', 'Informasi');
            return back();
        }

        // alert()->success('','');
        return redirect('checkout');
    }

    public function upload()
    {
        $pesanan = Pesanan::get();
        return view('pages.tes',['pesanan' => $pesanan]);
    }

    public function selesai($id){
        $pesanan = Pesanan::where('id', $id)->first();
        $pesanan->status = 3;
        $pesanan->update();

        return back();
    }
}
