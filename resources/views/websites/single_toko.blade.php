@extends('layouts.web')

@section('content')
<div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 order-lg-2">
          <div class="side-box mb-4">
            <p>
              Harga Barang <strong class="text-black">Rp. {{number_format($brg_toko->harga)}}</strong> <br>
              Status <strong class="text-black">@if($brg_toko->status == '1') Tersedia  @else Habis @endif</strong>
            </p>
            
            <div class="mb-4">
            <a href="https://api.whatsapp.com/send?phone={{$toko['kontak'] ?? ''}}" class="btn btn-primary text-white">Kontak Admin (WA)</a>
            </div>
            
          </div>
          
        </div>
        <div class="col-lg-8 pr-lg-5">
          <div class="owl-carousel slide-one-item mb-5">
            <img src="{{asset('img/'.$brg_toko->foto)}}" alt="Image" class="img-fluid mb-54">
            <img src="{{asset('img/'.$brg_toko->foto2)}}" alt="Image" class="img-fluid mb-54">
            <img src="{{asset('img/'.$brg_toko->foto3)}}" alt="Image" class="img-fluid mb-54">
            @if (!empty($brg_toko->video))
            <video width="100%" src="{{asset('img/'.$brg_toko->video)}}" alt="Video" controls></video>
            @endif
          </div>
          {!!$brg_toko->keterangan!!}
          
        </div>
      </div>
    </div>
  </div>
@endsection