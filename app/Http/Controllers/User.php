<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\UserAcc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = UserAcc::orderBy('status','ASC')->whereRole('0')->get();
        $no = 1;
        return view('admins/user.index',compact('user','no'));
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
        $email     = $request->emails;
        $instagram = $request->instagram;
        $alamat    = $request->alamat;
        $password  = $request->password;

        
        $this->validate($request,[
            'hp' => 'required|numeric',
            'emails' => 'required|unique:users,email'
        ]);
        try {
            $user            = new UserAcc;
            $user->nama      = $name;
            $user->email     = $email;
            $user->passStr   = $password;
            $user->password  = Hash::make($password);
            $user->kontak    = $hp;
            $user->alamat    = $alamat;
            $user->instagram = $instagram;
            $user->save();
            
            return Redirect::back()->with('success','Daftar Berhasil Silahkan Hubungi Admin...');
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
        $user = UserAcc::find($id);
        return view('admins/user.edit',compact('user'));
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
        $name      = $request->nama; 
        $hp        = $request->kontak;
        $email     = $request->email;
        $instagram = $request->instagram;
        $alamat    = $request->alamat;
        $status    = $request->status;
        $password  = $request->password;
        try {
            $user            = UserAcc::find($id);
            $user->nama      = $name;
            $user->email     = $email;
            if(isset($password))
            {
                $user->password = Hash::make($password);
            }
            $user->kontak    = $hp;
            $user->alamat    = $alamat;
            $user->instagram = $instagram;
            $user->status    = $status;
            $user->update();
            
            return redirect()->route('master_user');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = UserAcc::find($id);
        $user->delete();
        return redirect()->route('master_user');
    }
}
