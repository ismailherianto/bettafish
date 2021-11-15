<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web extends Controller
{
    public function index()
    {   
         return view('websites.beranda');
    }

    public function barang_toko()
    {   
         return view('websites.toko');
    }

    public function barang_lelang()
    {   
         return view('websites.lelang');
    }

    public function info_toko()
    {   
         return view('websites.info_toko');
    }

    public function info_lelang()
    {   
         return view('websites.info_lelang');
    }

    public function login_regist()
    {   
         return view('websites.login');
    }
}
