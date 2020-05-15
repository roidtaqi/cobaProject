<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Barang;
use App\User;
use App\Images;
use App\Pesan;
use App\Kategori;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
    {
        $hasil = Barang::where('rekomendasi', "ya")->get();
        $kategori = Kategori::all();
        return view('pages.home_login',['barang'=>$hasil,'kategori'=>$kategori]);
    }

     public function blog()
    {
        $kategori = Kategori::all();
        return view('pages.blog',['kategori'=>$kategori]);
    }

     public function semua()
    {
        $hasil = Barang::all();
        $kategori = Kategori::all();
        return view('pages.semua',['barang'=>$hasil,'kategori'=>$kategori]);
    }

     public function tidur()
    {
        $hasil = Barang::where('kategori', "Kamar Tidur")->get();
        $kategori = Kategori::all();
        return view('pages.tidur',['barang'=>$hasil,'kategori'=>$kategori]);
    }

     public function tamu()
    {
        $hasil = Barang::where('kategori', "Ruang Tamu")->get();
        $kategori = Kategori::all();
        return view('pages.tamu',['barang'=>$hasil,'kategori'=>$kategori]);
    }

    public function makan()
    {
        $hasil = Barang::where('kategori', "Ruang Makan")->get();
        $kategori = Kategori::all();
        return view('pages.makan',['barang'=>$hasil,'kategori'=>$kategori]);
    }

    public function kerja()
    {
        $hasil = Barang::where('kategori', "Ruang Kerja")->get();
        $kategori = Kategori::all();
        return view('pages.kerja',['barang'=>$hasil,'kategori'=>$kategori]);
    }

     public function dekorasi()
    {
        $hasil = Barang::where('kategori', "Dekorasi")->get();
        $kategori = Kategori::all();
        return view('pages.dekorasi',['barang'=>$hasil,'kategori'=>$kategori]);
    }

      public function checkout()
    {
        $kategori = Kategori::all();
        return view('pages.checkout',['kategori'=>$kategori]);
    }

     public function contact()
    {
        $kategori = Kategori::all();
        return view('pages.contact',['kategori'=>$kategori]);
    }

    public function single_blog()
    {
        $kategori = Kategori::all();
        return view('pages.single-blog',['kategori'=>$kategori]);
    }
    public function tracking()
    {
        $kategori = Kategori::all();
        return view('pages.tracking',['kategori'=>$kategori]);
    }

    public function confirmation()
    {
        $kategori = Kategori::all();
        return view('pages.confirmation',['kategori'=>$kategori]);
    }

  //   public function padmin()
  //   {
  //       return view('pages.pembayaran-admin');
  //   }

  //   public function pengiriman()
  //   {
  //       return view('pages.pengiriman');
  //   }

  //   public function dashboard()
  //   {
  //       $lihat = User::all();
  //       $lihat = 'user';
		// $lihat_list = User::orderBy('id', 'asc')->paginate('5');
  //       return view('pages.dashboard');
  //   }

      public function cart()
    {
        $kategori = Kategori::all();
        return view('pages.cart',['kategori'=>$kategori]);
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function edit()
    {
        $gambar = User::get();
        return view('auth.edit',['gambar' => $gambar]);
    }

    public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		User::create([
			'file' => $nama_file,
		]);
 
		return redirect()->back();
	}

}
