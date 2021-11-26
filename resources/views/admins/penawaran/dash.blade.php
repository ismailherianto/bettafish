@extends('layouts.app')
@section('content')
     <!-- Content Header (Page header) -->
     <section class="content-header">
        <h1>
          Kode Lelang
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Kode Lelang</li>
        </ol>
      </section>
  
      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          @foreach ($penawaran as $item)
          <div class="col-lg-3 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>{{$item->kode_lelang}}</h3>
  
                <p>{{$item->brand ?? ''}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('penawaran.show',$item->kode_lelang)}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          @endforeach
        </div>
        <!-- /.row -->
  
      </section>
      <!-- /.content -->
@endsection