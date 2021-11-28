@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
      Info Toko
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Info</a></li>
      <li class="active">Toko</li>
    </ol>
</section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Info Toko</h3>
            <div class="pull-right"><a href="{{url('info_toko/create')}}" class="btn btn-small btn-success">Tambah Data</a></div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="table" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Kontak</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Instagram</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($info_toko as $item)
                <tr>
                  <td>{{$no++}}</td>
                  <td align="center"><img src="{{asset('img/'.$item->foto)}}" width="150" alt=""></td>
                  <td>{{$item->kontak}}</td>
                  <td>{{$item->alamat}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->instagram}}</td>
                  <td align="center">
                    <div class="btn-group">
                      <form action="{{ route('info_toko.destroy',$item->id) }}" method="POST">
                      <a class="btn btn-info btn-xs" href="{{ route('info_toko.edit',$item->id) }}">Edit</a>
                      
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah anda yakin untuk hapus data ini ?')" class="btn btn-danger btn-xs">Hapus</button>
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
            $('#table').DataTable({
              'paging'      : false,
              'searching'   : false,
              'ordering'    : false,
              'info'        : false
            })
        })
  
  </script>    
  @endsection