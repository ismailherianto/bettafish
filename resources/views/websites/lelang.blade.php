@extends('layouts.web')

@section('content')

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
              <span>Jenis Ikan</span>
              <span class="ml-auto">{{$item->brand}}</span>
            </div>
            <div class="d-flex mb-2">
              <span>Harga Buka</span>
              <span class="ml-auto">Rp. {{number_format($item->harga_buka)}}</span>
            </div>
            <div class="d-flex mb-2">
              <span>Status</span>
              @if ($item->status == '1')
                <span class="ml-auto">Berlangsung</span>
              @else
                <span class="ml-auto">Tutup</span>
              @endif
            </div>
            <div class="d-flex mb-2">
              <span>Tanggal Tutup</span>
              <span class="ml-auto">{{date($item->tgl_tutup)}}</span>
            </div>
          </div>
          
        </div>
      </div>
      @endforeach
    </div>
  </div>
  </div>
@endsection