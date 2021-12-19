@extends('layouts.web')

@section('content')
<div class="hero-slide owl-carousel site-blocks-cover">
  <div class="intro-section" style="background-image: url({{asset('temp_web/images/hero_1.jpg')}});">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 mx-auto text-center" data-aos="fade-up">
          //TAG LOGO
          <span>
            <img class="img-fluid" src="{{asset('temp_web/images/product_1.jpg')}}" alt="">
          </span>
          //END TAG LOGO
          <h1>Register & Login</h1>
          
          <p><a href="{{route('login')}}" class="btn btn-primary">Register</a></p>
        </div>
      </div>
    </div>
  </div>
  

</div>

<div class="site-section">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-7 mb-5 text-center mx-auto">
          <span class="caption">Lelang</span>
          <h2 class="text-black">Item <strong>Lelang</strong></h2>
        </div>
      </div>
      <div class="row auctions-entry">
        @foreach ($lelang as $item)
        <div class="col-6 col-md-4 col-lg-3">
          <div class="item">
            <div>
              <a href="{{route('single-lelang',$item->id)}}"><img src="img/{{$item->foto}}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="p-4">
              <div class="d-flex mb-2">
                <span>Kode</span>
                <span class="ml-auto">{{$item->kode_lelang}}</span>
              </div>
              <div class="d-flex mb-2">
                <span>Jenis Ikan</span>
                <span class="ml-auto">{{$item->brand}}</span>
              </div>
              <div class="d-flex mb-2">
                <span>Harga Buka</span>
                <span class="ml-auto">Rp. {{number_format($item->harga_buka)}}</span>
              </div>
              <div class="d-flex mb-2">
                <span>Status</span>
                  <span class="ml-auto">Berlangsung</span>
              </div>
              <div class="d-flex mb-2">
                <span>Tanggal Tutup</span>
                <span class="ml-auto">{{\Carbon\Carbon::parse($item->tgl_tutup)->format('d-m-Y')}}</span>
              </div>
            </div>
            
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-7 mb-5 text-center mx-auto">
          <span class="caption">Barang</span>
          <h2 class="text-black">Barang <strong>Toko</strong></h2>
        </div>
      </div>
      <div class="row auctions-entry">
        @foreach ($toko as $item_toko)
        <div class="col-6 col-md-4 col-lg-3">
          <div class="item">
            <div>
              <a href="{{route('single-toko',$item_toko->id)}}"><img src="img/{{$item_toko->foto}}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="p-4">
              <div class="d-flex mb-2">
                <span>Jenis Ikan</span>
                <span class="ml-auto">{{$item_toko->brand}}</span>
              </div>
              <div class="d-flex mb-2">
                <span>Harga</span>
                <span class="ml-auto">Rp. {{number_format($item_toko->harga)}}</span>
              </div>
              <div class="d-flex mb-2">
                <span>Keterangan</span>
                @if ($item_toko->status == '1')
                  <span class="ml-auto">Tersedia</span>
                @else
                  <span class="ml-auto">Habis</span>
                @endif
              </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>
  </div>
@endsection