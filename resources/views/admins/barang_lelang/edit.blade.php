@extends('layouts.app')
@section('content')
<section class="content-header">
    <h1>
      Barang Lelang
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Barang</a></li>
      <li class="active">Edit Barang Lelang</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Edit Lelang</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('brg_lelang.update',$brg_lelang->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="box-body">
                  <div class="form-group">
                    <label for="kode">Kode Lelang</label>
                    <input type="text" name="kode" value="{{$brg_lelang->kode_lelang}}" class="form-control" id="kode" placeholder="Kode Lelang">
                  </div>
                  <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" name="nama_barang" value="{{$brg_lelang->brand}}" class="form-control" id="nama_barang" placeholder="Nama Barang">
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="desc">{{$brg_lelang->keterangan}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="jenis_ikan">Tanggal tutup</label>
                    <input type="date" name="tgl_tutup" class="form-control" id="tgl_tutup" placeholder="Tanggal Tutup">
                  </div>
                  <div class="form-group">
                    <label for="jenis_ikan">Harga Buka</label>
                    <input type="number" value="{{$brg_lelang->harga_buka}}" name="hrg_buka" min="0" class="form-control" id="hrg_buka" placeholder="Harga Buka">
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto 1</label>
                    <input type="file" name="foto" id="foto">
                  </div>
                  <div class="form-group">
                    <label for="foto2">Foto 2</label>
                    <input type="file" name="foto2" id="foto2">
                  </div>
                  <div class="form-group">
                    <label for="foto3">Foto 3</label>
                    <input type="file" name="foto3" id="foto3">
                  </div>
                  <div class="form-group">
                    <label for="video">Video</label>
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