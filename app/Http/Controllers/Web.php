<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\mInfoLelang;
use App\mInfoToko;
use App\mLelang;
use App\mToko;
use App\Penawaran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
         $brg_lelang = mLelang::find($id);

         $today   = Carbon::now();
         $tutup   = Carbon::parse($brg_lelang->tgl_tutup);
         $expired = $today->diffInDays($tutup);
         $cekUser = Penawaran::whereUser_id(Auth::user()->id)->whereLelang_id($id)->count();
         $pending = Penawaran::wherePending('1')->whereLelang_id($id)->count();

         $list_peserta = Penawaran::with(['toUser','toLelang'])->orderBy('harga_tawar','desc')->get();
                   
         return view('websites.single_lelang',compact('brg_lelang','list_peserta','expired','cekUser','pending'));
    }

    public function tawar(Request $request)
    {

         $penawaran              = new Penawaran;
         $penawaran->harga_tawar = (int) $request->harga;
         $penawaran->lelang_id   = (int) $request->id_brg;
         $penawaran->user_id     = Auth::user()->id;
         $penawaran->save();

         return Redirect::back();
         
    }

    public function single_toko($id)
    {   
         return view('websites.single_toko');
    }

//     public function login_regist()
//     {   
//          return view('websites.login');
//     }
}
