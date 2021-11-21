<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\UserAcc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $name      = $request->name; 
        $hp        = $request->hp;
        $email     = $request->email;
        $instagram = $request->instagram;
        $alamat    = $request->alamat;
        $password  = $request->password;
        try {
            $user = new UserAcc;
            $user->nama = $name; 
            $user->email = $email; 
            $user->password = Hash::make($password); 
            $user->kontak = $hp; 
            $user->alamat = $alamat; 
            $user->instagram = $instagram;
            $user->save();            
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
