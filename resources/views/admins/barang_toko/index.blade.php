@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
      Barang Toko
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Barang</a></li>
      <li class="active">Barang Toko</li>
    </ol>
</section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Barang Toko</h3>
            <div class="pull-right"><a href="{{url('brg_toko/create')}}" class="btn btn-small btn-success">Tambah Data</a></div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="table" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Foto 1</th>
                <th>Foto 2</th>
                <th>Foto 3</th>
                <th>Video</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($barang_toko as $item)
                <tr>
                  <td>{{$item->brand}}</td>
                  <td>{{number_format($item->harga)}}</td>
                  <td><img src="{{asset('img/'.$item->foto)}}" width="150" alt=""></td>
                  <td><img src="{{asset('img/'.$item->foto2)}}" width="150" alt=""></td>
                  <td><img src="{{asset('img/'.$item->foto3)}}" width="150" alt=""></td>
                  <td><video src="{{asset('img/'.$item->video)}}" width="150" alt=""></video></td> 
                  @if ($item->status == '1')
                    <td>Tersedia</td> 
                  @else
                    <td>Terjual</td> 
                  @endif
                  <td>
                    <div class="btn-group">
                      <form action="{{ route('brg_toko.destroy',$item->id) }}" method="POST">
                      <a class="btn btn-info btn-xs" href="{{ route('brg_toko.edit',$item->id) }}">Edit</a>
                      
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-xs">Hapus</button>
                      </form>
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