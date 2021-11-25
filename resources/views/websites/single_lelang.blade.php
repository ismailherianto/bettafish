@extends('layouts.web')

@section('content')
<div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 order-lg-2">
          <div class="side-box mb-4">
            <p>
              Harga Buka <strong class="text-black">Rp. {{number_format($brg_lelang->harga_buka)}}</strong> <br>
              Tanggal Tutup <strong class="text-black">{{\Carbon\Carbon::parse($brg_lelang->tgl_tutup)->format('d-m-Y')}}</strong>
            </p>
            @guest
             <a class="btn btn-primary" href="{{route('login')}}">Login/Register</a>
            @else
            <form method="POST" action="{{route('tawar')}}">
              @csrf
              <div class="mb-4">
                <input type="hidden" name="id_brg" value="{{$brg_lelang->id}}">
                <input type="number" name="harga" min="{{$brg_lelang->harga_buka}}" class="form-control mb-2" placeholder="Input Harga">
                <button class="btn btn-block" @if($expired == true || $cekUser > 0 || $pending > 0) disabled @endif>Tawar</button>
              </div>
            </form>
            @endguest
          </div>
          
        </div>
        <div class="col-lg-8 pr-lg-5">
          <div class="owl-carousel slide-one-item mb-5">
            <img src="{{asset('img/'.$brg_lelang->foto)}}" alt="Image" class="img-fluid mb-54">
            <img src="{{asset('img/'.$brg_lelang->foto2)}}" alt="Image" class="img-fluid mb-54">
            <img src="{{asset('img/'.$brg_lelang->foto3)}}" alt="Image" class="img-fluid mb-54">
            @if (!empty($brg_lelang->video))
            <video width="100%" src="{{asset('img/'.$brg_lelang->video)}}" alt="Video" controls></video>
            @endif
          </div>
          {!!$brg_lelang->keterangan!!}
          

          <h2 class="my-4">Pelelang</h2>
          <ul class="list-unstyled bidders">
            @foreach ($list_peserta as $key => $peserta)
            <li class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <span class="mr-2">{{$key+1}}.</span>
                  <div class="d-flex align-items-center">
                    <span>{{$peserta->toUser->nama ?? ''}}</span>
                  </div>
                </div>
                <span>Rp. {{number_format($peserta->harga_tawar ?? 0)}}</span>
                <span class="price">
                  @if ($peserta->pending == '1')
                      Terpilih
                  @else
                      Pending
                  @endif
                </span>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection