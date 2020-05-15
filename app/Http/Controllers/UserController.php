<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$user = user::where('id', Auth::user()->id)->first();

    	return view('auth.edit', compact('user'));
    }
}
