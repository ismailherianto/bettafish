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
      @foreach ($toko as $item_toko)
      <div class="col-6 col-md-4 col-lg-3">
        <div class="item">
          <div>
            <a href="{{route('single-toko',$item_toko->id)}}"><img src="{{asset('img/'.$item_toko->foto)}}" alt="Image" class="img-fluid"></a>
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