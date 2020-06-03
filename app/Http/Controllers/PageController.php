<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use App\Pesanan;
use App\PesananDetail;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    /**
     * Display maps page
     *
     * @return \Illuminate\View\View
     */
    public function maps()
    {
        return view('pages.maps');
    }

    /**
     * Display tables page
     *
     * @return \Illuminate\View\View
     */
    public function tables()
    {
        return view('pages.tables');
    }

    /**
     * Display users page
     *
     * @return \Illuminate\View\View
     */
    public function users(User $model)
    {
        return view('pages.users', ['users' => $model->paginate(15)]);
    }

    public function dashboard()
    {
        $lihat = User::all();
        $lihat = 'user';
        $lihat_list = User::orderBy('id', 'asc')->paginate('15');
        $pengiriman = Pesanan::count('id');
        $pembelian = DB::table('pesanans')
        -> where('pesanans.status','=','1')
        -> count();
        $user = User::count('id');
        return view('pages.dashboard', compact('pengiriman','pembelian','user'));
    }

    public function padmin()
    {
        return view('pages.pembayaran-admin');
    }

    public function pengiriman()
    {
        return view('pages.pengiriman');
    }
}