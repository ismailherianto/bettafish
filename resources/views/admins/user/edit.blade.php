@extends('layouts.app')
@section('content')
<section class="content-header">
    <h1>
      User
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Info</a></li>
      <li class="active">Edit User</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Edit User</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('user.update',$user->id) }}">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input name="nama" id="nama" value="{{$user->nama}}" type="text" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10">{{$user->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="kontak">No.HP/WA</label>
                        <input name="kontak" id="kontak" value="{{$user->kontak}}" type="text" class="form-control" placeholder="Nomor HP / WA">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" id="email" value="{{$user->email}}" type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input name="password" id="password" value="" minlength="6" type="password" class="form-control" placeholder="Password">
                  </div>
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input name="instagram" value="{{$user->instagram}}" id="instagram" type="text" class="form-control" placeholder="Instagram">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option disabled selected hidden>--Status User--</option>
                            <option value="1" @if($user->status == '1') selected @endif>Aktif</option>
                            <option value="0" @if($user->status == '0') selected @endif>Non Aktif</option>
                        </select>
                    </div>
                </div>
                <!-- /.box-body -->
        
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.box -->
        
        </div>
    </div>
</section>
@endsection