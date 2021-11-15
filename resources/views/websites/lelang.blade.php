@extends('layouts.web')

@section('content')
<div class="hero-slide owl-carousel site-blocks-cover">
  <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 mx-auto text-center" data-aos="fade-up">
          <h1>The Best Place to Buy and Sell</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, nihil.</p>
          <p><a href="#" class="btn btn-primary">Register</a></p>
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
        @for ($i = 1; $i <= 8; $i++)
        <div class="col-6 col-md-4 col-lg-3">
          <div class="item">
            <div>
              <a href="item-single.html"><img src="{{asset('temp_web/images/product_'.$i.'.jpg')}}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="p-4">
              <h3><a href="item-single.html">Pinky Shoes</a></h3>
              <div class="d-flex mb-2">
                <span>Jenis Ikan</span>
                <span class="ml-auto">xxxxxxxx</span>
              </div>
              <div class="d-flex mb-2">
                <span>Harga Buka</span>
                <span class="ml-auto">Rp. {{number_format(200000)}}</span>
              </div>
              <div class="d-flex mb-2">
                <span>Status</span>
                <span class="ml-auto">@if($i % 2 == 0)Berlangsung @else Tutup @endif</span>
              </div>
              <div class="d-flex mb-2">
                <span>Tanggal Tutup</span>
                <span class="ml-auto">{{date('d-m-Y')}}</span>
              </div>
              <a href="item-single.html" class="btn btn-bid">Submit a Bid</a>
            </div>
            
          </div>
        </div>
        @endfor
      </div>
    </div>
  </div>
@endsection