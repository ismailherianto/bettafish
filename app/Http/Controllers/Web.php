<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\mInfoLelang;
use App\mInfoToko;
use App\mLelang;
use App\mToko;
use Illuminate\Http\Request;

class Web extends Controller
{
    public function index()
    {   
         $lelang = mLelang::orderBy('tgl_tutup','desc')->get();
         $toko   = mToko::orderBy('brand','asc')->get();
         return view('websites.beranda',compact('lelang','toko'));
    }

    public function barang_toko()
    {   
         $toko   = mToko::orderBy('brand','asc')->get();
         return view('websites.toko',compact('toko'));
    }

    public function barang_lelang()
    {   
         $lelang = mLelang::orderBy('tgl_tutup','desc')->get();
         return view('websites.lelang',compact('lelang'));
    }

    public function info_toko()
    {   
         $info_toko = mInfoToko::orderBy('id','ASC')->take(1)->get();
         $img = mInfoToko::first('foto');
         return view('websites.info_toko',compact('info_toko','img'));
    }

    public function info_lelang()
    {   
         $info_lelang = mInfoLelang::first('deskripsi');
         $img = mInfoLelang::first('foto');
         return view('websites.info_lelang',compact('info_lelang','img'));
    }

    public function single_lelang($id)
    {   
         return view('websites.single_lelang');
    }

    public function single_toko($id)
    {   
         return view('websites.single_toko');
    }

    public function login_regist()
    {   
         return view('websites.login');
    }
}
