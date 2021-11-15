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
}
