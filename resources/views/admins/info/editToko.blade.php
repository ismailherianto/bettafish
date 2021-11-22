@extends('layouts.app')
@section('content')
<section class="content-header">
    <h1>
      Info Toko
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Info</a></li>
      <li class="active">Edit Info Toko</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Edit Info Toko</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('info_toko.update',$info_toko->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="form-group">
                     <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10">{{$info_toko->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="kontak">No.HP/WA</label>
                        <input name="kontak" id="kontak" value="{{$info_toko->kontak}}" type="text" class="form-control" placeholder="Nomor HP / WA">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" id="email" value="{{$info_toko->email}}" type="email" class="form-control" placeholder="Email Toko">
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input name="instagram" value="{{$info_toko->instagram}}" id="instagram" type="text" class="form-control" placeholder="Instagram">
                    </div>
                    <div class="form-group">
                      <label for="desc">Deskripsi</label>
                      <textarea class="form-control" name="desc" id="desc">{{$info_toko->deskripsi}}</textarea>
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

@section('script')
<script>
    $(function(){
        $('#desc').wysihtml5();
    })
</script>
@endsection