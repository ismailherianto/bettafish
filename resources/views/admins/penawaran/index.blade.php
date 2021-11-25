@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
      Penawaran
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Penawaran</a></li>
      <li class="active">Data Penawaran</li>
    </ol>
</section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Penawaran</h3>
            {{-- <div class="pull-right"><a href="{{url('info_lelang/create')}}" class="btn btn-small btn-success">Tambah Data</a></div> --}}
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="table" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Kandidat</th>
                <th>Barang</th>
                <th>Harga</th>
                <th>Harga Tawar</th>
                <th>Tanggal Tutup</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($penawaran as $key=>$item)
                <tr>
                  <td>{{$key + 1}}</td>
                  <td>{{$item->toUser->nama}}</td>
                  <td>{{$item->toLelang->brand}}</td>
                  <td>{{number_format($item->toLelang->harga_buka)}}</td>
                  <td>{{number_format($item->harga_tawar)}}</td>
                  <td>{{\Carbon\Carbon::parse($item->tgl_tutup)->format('d-m-Y')}}</td>
                  <td align="center">@if($item->pending == '0') Pending @else Terpilih @endif</td>
                  <td align="center">
                    <form action="{{ route('penawaran.update',$item->id) }}" method="POST">                        
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-danger btn-xs">Pilih</button>
                    </form>
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