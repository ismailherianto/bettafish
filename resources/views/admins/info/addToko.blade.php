@extends('layouts.app')
@section('content')
<section class="content-header">
    <h1>
      Info Toko
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Info</a></li>
      <li class="active">Tambah Info Toko</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Tambah Info Toko</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{url('brg_toko')}}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                     <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" id="gambar">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kontak">No.HP/WA</label>
                        <input name="kontak" id="kontak" type="text" class="form-control" placeholder="Nomor HP / WA">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" id="email" type="email" class="form-control" placeholder="Email Toko">
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input name="instagram" id="instagram" type="text" class="form-control" placeholder="Instagram">
                    </div>
                    <div class="form-group">
                      <label for="desc">Deskripsi</label>
                      <textarea class="form-control" name="deskripsi" id="desc"></textarea>
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