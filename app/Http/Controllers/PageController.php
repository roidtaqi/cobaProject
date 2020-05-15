<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Requests\UserRequest;
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
        return view('pages.dashboard');
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