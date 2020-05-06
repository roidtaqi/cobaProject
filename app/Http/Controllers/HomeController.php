<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Barang;
use App\User;
use App\Images;

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
        $hasil = Barang::all();
        return view('pages.home_login',['barang'=>$hasil]);
    }

     public function blog()
    {
        return view('pages.blog');
    }

     public function tidur()
    {
        return view('pages.tidur');
    }

     public function tamu()
    {
        return view('pages.tamu');
    }

    public function makan()
    {
        return view('pages.makan');
    }

    public function kerja()
    {
        return view('pages.kerja');
    }

     public function dekorasi()
    {
        return view('pages.dekorasi');
    }

      public function checkout()
    {
        return view('pages.checkout');
    }

     public function contact()
    {
        return view('pages.contact');
    }

    public function single_blog()
    {
        return view('pages.single-blog');
    }
    public function tracking()
    {
        return view('pages.tracking');
    }

    public function confirmation()
    {
        return view('pages.confirmation');
    }

    public function dashboard()
    {
        $lihat = User::all();
        $lihat = 'user';
		$lihat_list = User::orderBy('id', 'asc')->paginate('5');
        return view('pages.dashboard');
    }

      public function cart()
    {
        return view('pages.cart');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function edit()
    {
        return view('auth.edit');
    }
}
