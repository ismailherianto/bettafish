@extends('layouts.web')

@section('content')

<div class="site-section">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-7 mb-5 text-center mx-auto">
          <span class="caption">Barang</span>
          <h2 class="text-black">Barang <strong>Toko</strong></h2>
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
                <span>Harga</span>
                <span class="ml-auto">Rp. {{number_format(200000)}}</span>
              </div>
              <div class="d-flex mb-2">
                <span>Keterangan</span>
                <span class="ml-auto">@if($i % 2 == 0)Tersedia @else Habis @endif</span>
              </div>
              <a href="item-single.html" class="btn btn-bid">Submit a Bid</a>
            </div>
          </div>
        </div>
        @endfor
    </div>
</div>
@endsection