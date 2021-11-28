@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
      User
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">User</a></li>
      <li class="active">Data User</li>
    </ol>
</section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data User</h3>
            {{-- <div class="pull-right"><a href="{{url('info_lelang/create')}}" class="btn btn-small btn-success">Tambah Data</a></div> --}}
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="table" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No. Hp</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Password</th>
                <th>Status</th>
                <th>Role</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($user as $item)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$item->nama}}</td>
                  <td>{{$item->kontak}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->alamat}}</td>
                  <td>{{$item->passStr}}</td>
                  <td align="center">@if($item->status == '1') Aktif @else Nonaktif @endif</td>
                  <td align="center">@if($item->role == '0') Pembeli @endif</td>
                  <td align="center">
                    <div class="btn-group">
                      <form action="{{ route('user.destroy',$item->id) }}" method="POST">
                      <a class="btn btn-info btn-xs" href="{{ route('user.edit',$item->id) }}">Edit</a>
                      
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
            $('#table').DataTable()
        })
  
  </script>    
  @endsection