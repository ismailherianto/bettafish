<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\mInfoToko;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InfoToko extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info_toko = mInfoToko::orderBy('id')->take(1)->get();
        $no = 1;
        return view('admins/info.toko',compact('info_toko','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins/info.addToko');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $info_toko = new mInfoToko;
       if($request->hasFile('foto')){
            $request->validate([
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->foto->extension();
            $request->foto->move('img',$nama_file);
            $info_toko->foto = $nama_file;
        }
        
        $info_toko->email     = $request->email;
        $info_toko->kontak    = $request->kontak;
        $info_toko->alamat    = $request->alamat;
        $info_toko->instagram = $request->instagram;
        $info_toko->save();

        return redirect()->route('master_info_toko');
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
        $info_toko = mInfoToko::find($id);
        return view('admins/info.editToko',compact('info_toko'));
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
       $info_toko = mInfoToko::find($id);
       if($request->hasFile('foto')){
            $request->validate([
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->foto->extension();
            $request->foto->move('img',$nama_file);
            $info_toko->foto = $nama_file;
        }
        
        $info_toko->email     = $request->email;
        $info_toko->kontak    = $request->kontak;
        $info_toko->alamat    = $request->alamat;
        $info_toko->instagram = $request->instagram;
        $info_toko->update();

        return redirect()->route('master_info_toko');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info_toko = mInfoToko::find($id);
        $info_toko->delete();

        return redirect()->route('master_info_toko');
    }
}
