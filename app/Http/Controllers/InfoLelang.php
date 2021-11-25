<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\mInfoLelang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InfoLelang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info_lelang = mInfoLelang::orderBy('id')->take(1)->get();
        $no = 1;
        return view('admins/info.lelang',compact('info_lelang','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins/info.addLelang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $info_lelang = new mInfoLelang;
       if($request->hasFile('foto')){
            $request->validate([
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            $nama_file = time().Str::random(3).'.'.$request->foto->extension();
            $request->foto->move('img',$nama_file);
            $info_lelang->foto = $nama_file;
        }
        $info_lelang->deskripsi = $request->desc;
        $info_lelang->save();

        return redirect()->route('master_info_lelang');
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
        $info_lelang = mInfoLelang::find($id);
        return view('admins/info.editLelang',compact('info_lelang'));
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
        $info_lelang = mInfoLelang::find($id);
       if($request->hasFile('foto')){
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        $nama_file = time().Str::random(3).'.'.$request->foto->extension();
        $request->foto->move('img',$nama_file);
        $info_lelang->foto = $nama_file;
    }
        $info_lelang->deskripsi = $request->desc;
        $info_lelang->update();

        return redirect()->route('master_info_lelang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info_lelang = mInfoLelang::find($id);
        $info_lelang->delete();

        return redirect()->route('master_info_lelang');
    }
}
