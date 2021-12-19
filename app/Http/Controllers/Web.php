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
          $today = Carbon::parse(Carbon::now())->format('Y-m-d');
          $lelang = mLelang::where('tgl_tutup', '>', $today)->orderBy('tgl_tutup', 'ASC')->get();
          $toko   = mToko::orderBy('brand', 'asc')->get();
          return view('websites.beranda', compact('lelang', 'toko'));
     }

     public function barang_toko()
     {
          $toko   = mToko::orderBy('brand', 'asc')->get();
          return view('websites.toko', compact('toko'));
     }

     public function barang_lelang()
     {
          $today = Carbon::parse(Carbon::now())->format('Y-m-d');
          $lelang = mLelang::where('tgl_tutup', '>', $today)->orderBy('kode_lelang', 'ASC')->get();
          return view('websites.lelang', compact('lelang'));
     }

     public function info_toko()
     {
          $info_toko = mInfoToko::orderBy('id', 'ASC')->take(1)->get();
          $img = mInfoToko::first('foto');
          return view('websites.info_toko', compact('info_toko', 'img'));
     }

     public function info_lelang()
     {
          $info_lelang = mInfoLelang::first('deskripsi');
          $img = mInfoLelang::first('foto');
          return view('websites.info_lelang', compact('info_lelang', 'img'));
     }

     public function single_lelang($id)
     {
          $brg_lelang = mLelang::find($id);

          $today       = Carbon::now();
          $tutup       = Carbon::parse($brg_lelang->tgl_tutup);
          $kode_lelang = $brg_lelang->kode_lelang;

          $expired = $today->greaterThan($tutup);
          $pending = Penawaran::wherePending('1')->whereLelang_id($id)->count();



          $list_peserta = Penawaran::with(['toUser', 'toLelang' => function ($query) use ($kode_lelang) {
               $query->whereKode_lelang($kode_lelang);
          }])->whereLelang_id($id)
               ->orderBy('harga_tawar', 'desc')
               ->get();

          return view('websites.single_lelang', compact('brg_lelang', 'list_peserta', 'expired', 'pending'));
     }

     public function tawar(Request $request)
     {

          Penawaran::updateOrCreate([
               'lelang_id' => (int) $request->id_brg,
               'user_id' => Auth::user()->id
          ], [
               'harga_tawar' => (int) $request->harga,
          ]);

          return Redirect::back();
     }

     public function single_toko($id)
     {
          $brg_toko = mToko::find($id);
          $toko = mInfoToko::first('kontak');
          return view('websites.single_toko', compact('brg_toko', 'toko'));
     }
}
