@extends('layouts.web')

@section('content')
<div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 order-lg-2">
          <div class="side-box mb-4">
            <p>
              Harga Barang <strong class="text-black">Rp. {{number_format(200000)}}</strong> <br>
              Status <strong class="text-black">Tersedia</strong>
            </p>
            
            <div class="mb-4">
            <a class="btn btn-primary text-white">Kontak Admin (WA)</a>
            </div>
            
          </div>
          
        </div>
        <div class="col-lg-8 pr-lg-5">
          <div class="owl-carousel slide-one-item mb-5">
            <img src="{{asset('temp_web/images/product_1.jpg')}}" alt="Image" class="img-fluid mb-54">
            <img src="{{asset('temp_web/images/product_1.jpg')}}" alt="Image" class="img-fluid mb-54">
            <img src="{{asset('temp_web/images/product_1.jpg')}}" alt="Image" class="img-fluid mb-54">
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, dolore, vitae. Maxime natus, temporibus accusamus aspernatur hic, impedit consectetur ut assumenda quidem mollitia et, praesentium ex eum ipsum. Explicabo, saepe.</p>
          <p>Ducimus, pariatur, culpa nihil molestias ea repellendus adipisci harum ipsam perferendis, quisquam nulla ipsa fugit! Minima velit explicabo eos, perspiciatis facilis illo, architecto earum sed dolores maiores vitae soluta repellat.</p>
          <p>Suscipit dolor consequuntur cum illo eos, perspiciatis voluptas ut, officia quos minus. Adipisci in consequatur, suscipit ipsum, doloribus dolorem vel quod blanditiis fugiat recusandae. Illum tenetur impedit eligendi cum qui.</p>
          
        </div>
      </div>
    </div>
  </div>
@endsection