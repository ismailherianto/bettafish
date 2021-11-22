@extends('layouts.web')

@section('content')
<div class="hero-slide owl-carousel site-blocks-cover">
    <div class="intro-section" style="background-image: url('');">
      <img src="{{asset('img/'.$img['foto'])}}" alt="">
    </div>
    
  
</div>

<div class="site-section">
    <div class="container">
        <p>
            <h2>Info Toko</h2>
            <ul>
                @foreach ($info_toko as $item)
                    <li>{{$item->instagram}}</li>
                    <li>{{$item->kontak}}</li>
                    <li>{{$item->email}}</li>
                    <li>{{$item->alamat}}</li>
                @endforeach
            </ul>
        </p>
    </div>
</div>
@endsection