<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Penawaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Penawaran_lelang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penawaran = Penawaran::with(['toUser','toLelang'])->orderBy('id','DESC')->get();
        return view('admins/penawaran.index',compact('penawaran'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $penawaran = Penawaran::find($id);
        $cek = Penawaran::whereLelang_id($penawaran->lelang_id)->wherePending('1')->count();
        if($cek > 0)
        {
          return redirect()->route('master_penawaran');
        }
        $penawaran->pending = '1';
        $penawaran->update();

        return redirect()->route('master_penawaran');
    }

}
