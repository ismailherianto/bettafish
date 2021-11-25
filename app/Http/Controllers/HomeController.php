<?php

namespace App\Http\Controllers;

use App\mLelang;
use App\mToko;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $member = User::whereRole('0')->count();
        $barang = mToko::count();
        $lelang = mLelang::count();
        return view('admins.dashboard',compact('member','barang','lelang'));
    }
}
