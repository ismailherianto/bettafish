@extends('layouts.web')

@section('content')
<div class="hero-slide owl-carousel site-blocks-cover">
    <div class="intro-section">
        <img src="{{asset('img/'.$img['foto'])}}" alt="">
    </div>
    
  
</div>

<div class="site-section">
    <div class="container">
        <p>
            <h2>Info Lelang</h2>
            {!!$info_lelang['deskripsi']!!}
        </p>
    </div>
</div>
@endsection