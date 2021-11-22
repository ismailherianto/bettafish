@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
      Barang Lelang
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Barang</a></li>
      <li class="active">Barang Lelang</li>
    </ol>
</section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Barang Lelang</h3>
            <div class="pull-right"><a href="{{url('brg_lelang/create')}}" class="btn btn-small btn-success">Tambah Data</a></div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="table" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nama Barang</th>
                <th>Tanggal Tutup</th>
                <th>Harga Buka</th>
                <th>Foto 1</th>
                <th>Foto 2</th>
                <th>Foto 3</th>
                <th>Video</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($barang_lelang as $item)
                <tr>
                  <td>{{$item->brand}}</td>
                  <td>{{\Carbon\Carbon::parse($item->tgl_tutup)->format('d-m-Y')}}</td>
                  <td>{{number_format($item->harga_buka)}}</td>
                  <td><img src="{{asset('img/'.$item->foto)}}" width="150" alt=""></td>
                  <td><img src="{{asset('img/'.$item->foto2)}}" width="150" alt=""></td>
                  <td><img src="{{asset('img/'.$item->foto3)}}" width="150" alt=""></td>
                  <td><video src="{{asset('img/'.$item->video)}}" width="150" alt=""></video></td> 
                  @if ($item->status == '1')
                    <td>Berlangsung</td> 
                  @else
                    <td>Tutup</td> 
                  @endif
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info btn-xs" href="{{ route('brg_lelang.edit',$item->id) }}">Edit</a>
                    </div>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
@endsection
  @section('script')
  <script>
      $(function () {
            $('#table').DataTable()
        })
  
  </script>    
  @endsection