@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
      Info Lelang
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Info</a></li>
      <li class="active">Lelang</li>
    </ol>
</section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Info Lelang</h3>
            <div class="pull-right"><a href="{{url('info_lelang/create')}}" class="btn btn-small btn-success">Tambah Data</a></div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="table" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($info_lelang as $item)
                <tr>
                  <td>{{$no++}}</td>
                  <td align="center"><img src="{{asset('img/'.$item->foto)}}" width="150" alt=""></td>
                  <td align="center">
                    <div class="btn-group">
                      <form action="{{ route('info_lelang.destroy',$item->id) }}" method="POST">
                      <a class="btn btn-info btn-xs" href="{{ route('info_lelang.edit',$item->id) }}">Edit</a>
                      
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