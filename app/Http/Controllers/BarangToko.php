<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\mToko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BarangToko extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang_toko = mToko::orderBy('id','DESC')->get();
        return view('admins.barang_toko/index',compact('barang_toko'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.barang_toko/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang_toko = new mToko();
        $barang_toko->brand = $request->nama_barang;
        $barang_toko->keterangan = $request->deskripsi;
        $barang_toko->harga = $request->harga;

        if($request->hasFile('foto')){
            $request->validate([
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->foto->extension();
            $request->foto->move('img',$nama_file);

            $barang_toko->foto = $nama_file;
        }

        if($request->hasFile('foto2')){
            $request->validate([
                'foto2' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->foto2->extension();
            $request->foto2->move('img',$nama_file);

            $barang_toko->foto2 = $nama_file;
        }

        if($request->hasFile('foto3')){
            $request->validate([
                'foto3' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->foto3->extension();
            $request->foto3->move('img',$nama_file);

            $barang_toko->foto3 = $nama_file;
        }

        if($request->hasFile('video')){
            $request->validate([
                'video' => 'mimes:mp4',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->video->extension();
            $request->video->move('img',$nama_file);

            $barang_toko->video = $nama_file;
        }

        $barang_toko->save();

        return redirect()->route('master_brg_toko');
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
        $brg_toko = mToko::find($id);

        return view('admins.barang_toko/edit',compact('brg_toko'));
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
        $barang_toko             = mToko::find($id);
        $barang_toko->brand      = $request->nama_barang;
        $barang_toko->keterangan = $request->deskripsi;
        $barang_toko->harga      = $request->harga;
        $barang_toko->status     = $request->status ?? '0';

        if($request->hasFile('foto')){
            $request->validate([
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->foto->extension();
            $request->foto->move('img',$nama_file);

            
            
            $barang_toko->foto = $nama_file;
        }

        if($request->hasFile('foto2')){
            $request->validate([
                'foto2' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->foto2->extension();
            $request->foto2->move('img',$nama_file);

            
           
            $barang_toko->foto2 = $nama_file;
        }

        if($request->hasFile('foto3')){
            $request->validate([
                'foto3' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->foto3->extension();
            $request->foto3->move('img',$nama_file);

            
           
            $barang_toko->foto3 = $nama_file;
        }

        if($request->hasFile('video')){
            $request->validate([
                'video' => 'mimes:mp4',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->video->extension();
            $request->video->move('img',$nama_file);

            
           
            $barang_toko->video = $nama_file;
        }

        $barang_toko->update();

        return redirect()->route('master_brg_toko');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $barang_toko = mToko::find($id);
            
            $barang_toko->delete();
            return redirect()->route('master_brg_toko');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
