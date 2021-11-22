@extends('layouts.web')

@section('content')
<div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 order-lg-2">
          <div class="side-box mb-4">
            <p>
              Harga Buka <strong class="text-black">Rp. {{number_format(200000)}}</strong> <br>
              Tanggal Tutup <strong class="text-black">{{date('d-m-Y')}}</strong>
            </p>
            <form action="#">
              <div class="mb-4">
                <input type="text" class="form-control mb-2" placeholder="Input Harga">
                <button class="btn btn-block">Tawar</button>
              </div>
            </form>
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
          

          <h2 class="my-4">Pelelang</h2>
          <ul class="list-unstyled bidders">
            @for ($i = 1; $i <= 3; $i++)
            <li class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <span class="mr-2">{{$i}}.</span>
                  <div class="d-flex align-items-center">
                    <img src="{{asset('temp_web/images/person_1.jpg')}}" alt="Image" class="mr-2">
                    <span>Jean Smith</span>
                  </div>
                </div>
                <span>Rp. {{number_format(200000)}}</span>
                <span class="price">Pending</span>
            </li>
            @endfor
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection