<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\mLelang;
use App\mToko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BarangLelang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang_lelang = mLelang::orderBy('id','DESC')->get();
        return view('admins.barang_lelang/index',compact('barang_lelang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.barang_lelang/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $barang_lelang = new mLelang();
        $barang_lelang->brand = $request->nama_barang;
        $barang_lelang->keterangan = $request->deskripsi;
        $barang_lelang->tgl_tutup = $request->tgl_tutup;
        $barang_lelang->harga_buka = $request->hrg_buka;

        if($request->hasFile('foto')){
            $request->validate([
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->foto->extension();
            $request->foto->move('img',$nama_file);

            $barang_lelang->foto = $nama_file;
        }

        if($request->hasFile('foto2')){
            $request->validate([
                'foto2' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->foto2->extension();
            $request->foto2->move('img',$nama_file);

            $barang_lelang->foto2 = $nama_file;
        }

        if($request->hasFile('foto3')){
            $request->validate([
                'foto3' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->foto3->extension();
            $request->foto3->move('img',$nama_file);

            $barang_lelang->foto3 = $nama_file;
        }

        if($request->hasFile('video')){
            $request->validate([
                'video' => 'mimes:mp4',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->video->extension();
            $request->video->move('img',$nama_file);

            $barang_lelang->video = $nama_file;
        }

        $barang_lelang->save();

        return redirect()->route('master_brg_lelang');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brg_lelang = mLelang::find($id);

        return view('admins.barang_lelang/edit',compact('brg_lelang'));
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
        $barang_lelang = mLelang::find($id);
        $barang_lelang->brand = $request->nama_barang;
        $barang_lelang->keterangan = $request->deskripsi;
        $barang_lelang->tgl_tutup = $request->tgl_tutup;
        $barang_lelang->harga_buka = $request->hrg_buka;

        if($request->hasFile('foto')){
            $request->validate([
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->foto->extension();
            $request->foto->move('img',$nama_file);

            
            Storage::delete($barang_lelang->foto);
            $barang_lelang->foto = $nama_file;
        }

        if($request->hasFile('foto2')){
            $request->validate([
                'foto2' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->foto2->extension();
            $request->foto2->move('img',$nama_file);

            
            Storage::delete($barang_lelang->foto2);
            $barang_lelang->foto2 = $nama_file;
        }

        if($request->hasFile('foto3')){
            $request->validate([
                'foto3' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->foto3->extension();
            $request->foto3->move('img',$nama_file);

            
            Storage::delete($barang_lelang->foto3);
            $barang_lelang->foto3 = $nama_file;
        }

        if($request->hasFile('video')){
            $request->validate([
                'video' => 'mimes:mp4',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->video->extension();
            $request->video->move('img',$nama_file);

            
            Storage::delete($barang_lelang->video);
            $barang_lelang->video = $nama_file;
        }

        $barang_lelang->save();

        return redirect()->route('master_brg_lelang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
