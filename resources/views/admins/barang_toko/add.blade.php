@extends('layouts.app')
@section('content')
<section class="content-header">
    <h1>
      Barang toko
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Barang</a></li>
      <li class="active">Tambah Barang toko</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Tambah Barang Toko</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{url('brg_toko')}}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" placeholder="Nama Barang">
                  </div>
                  <div class="form-group">
                    <label for="jenis_ikan">Jenis Ikan</label>
                    <input type="text" class="form-control" id="jenis_ikan" placeholder="Jenis Ikan">
                  </div>
                  <div class="form-group">
                    <label for="jenis_ikan">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="desc"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="jenis_ikan">Harga</label>
                    <input type="number" min="0" class="form-control" id="hrg_buka" placeholder="Harga Barang">
                  </div>
                  <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" id="gambar">
                  </div>
                  <div class="form-group">
                    <label for="gambar">Video</label>
                    <input type="file" name="video" id="video">
                  </div>
                  {{-- <div class="checkbox">
                    <label>
                      <input type="checkbox"> Check me out
                    </label>
                  </div> --}}
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