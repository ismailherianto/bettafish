@extends('layouts.app')
@section('content')
<section class="content-header">
    <h1>
      Info Lelang
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Info</a></li>
      <li class="active">Edit Info Lelang</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Edit Info Lelang</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('info_lelang.update',$info_lelang->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="form-group">
                     <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto">
                    </div>
                    <div class="form-group">
                      <label for="desc">Deskripsi</label>
                      <textarea class="form-control" name="desc" id="desc">{{$info_lelang->deskripsi}}</textarea>
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