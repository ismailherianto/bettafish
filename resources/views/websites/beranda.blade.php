@extends('layouts.web')

@section('content')
<div class="site-section">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-7 mb-5 text-center mx-auto">
          <span class="caption">Auctions</span>
          <h2 class="text-black">Current <strong>Auctions</strong></h2>
        </div>
      </div>
      <div class="row auctions-entry">
        <div class="col-6 col-md-4 col-lg-3">
          <div class="item">
            <div>
              <strong class="price">$95</strong>
              <a href="item-single.html"><img src="temp_web/images/product_1.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="p-4">
              <h3><a href="item-single.html">Pinky Shoes</a></h3>
              <div class="d-flex mb-2">
                <span>Shoes</span>
                <span class="ml-auto">4 bids</span>
              </div>
              <a href="item-single.html" class="btn btn-bid">Submit a Bid</a>
            </div>
            
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <div class="item">
            <div>
              <strong class="price">$30</strong>
              <a href="item-single.html"><img src="temp_web/images/product_2.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="p-4">
              <h3><a href="item-single.html">Eye Glass Eye Protector</a></h3>
              <div class="d-flex mb-2">
                <span>Eye Glasses</span>
                <span class="ml-auto">10 bids</span>
              </div>
              <a href="item-single.html" class="btn btn-bid">Submit a Bid</a>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <div class="item">
            <div>
              <strong class="price">$199</strong>
              <a href="item-single.html"><img src="temp_web/images/product_3.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="p-4">
              <h3><a href="item-single.html">Black Leather Jacket</a></h3>
              <div class="d-flex mb-2">
                <span>Clothing</span>
                <span class="ml-auto">24 bids</span>
              </div>
              <a href="item-single.html" class="btn btn-bid">Submit a Bid</a>
            </div>
          </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
          <div class="item">
            <div>
              <strong class="price">$1,999</strong>
              <a href="item-single.html"><img src="temp_web/images/product_4.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="p-4">
              <h3><a href="item-single.html">MacBook 15-Inch Laptop</a></h3>
              <div class="d-flex mb-2">
                <span>Clothing</span>
                <span class="ml-auto">224 bids</span>
              </div>
              <a href="item-single.html" class="btn btn-bid">Submit a Bid</a>
            </div>
          </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
          <div class="item">
            <div>
              <strong class="price">$777</strong>
              <a href="item-single.html"><img src="temp_web/images/product_5.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="p-4">
              <h3><a href="item-single.html">iPad</a></h3>
              <div class="d-flex mb-2">
                <span>Electronics</span>
                <span class="ml-auto">11 bids</span>
              </div>
              <a href="item-single.html" class="btn btn-bid">Submit a Bid</a>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <div class="item">
            <div>
              <strong class="price">$78</strong>
              <a href="item-single.html"><img src="temp_web/images/product_6.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="p-4">
              <h3><a href="item-single.html">Shoe Sneakers</a></h3>
              <div class="d-flex mb-2">
                <span>Shoes</span>
                <span class="ml-auto">4 bids</span>
              </div>
              <a href="item-single.html" class="btn btn-bid">Submit a Bid</a>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <div class="item">
            <div>
              <strong class="price">$1,999</strong>
              <a href="item-single.html"><img src="temp_web/images/product_7.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="p-4">
              <h3><a href="item-single.html">iMac</a></h3>
              <div class="d-flex mb-2">
                <span>Electronics</span>
                <span class="ml-auto">293 bids</span>
              </div>
              <a href="item-single.html" class="btn btn-bid">Submit a Bid</a>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <div class="item">
            <div>
              <strong class="price">$450</strong>
              <a href="item-single.html"><img src="temp_web/images/product_8.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="p-4">
              <h3><a href="item-single.html">iWatch</a></h3>
              <div class="d-flex mb-2">
                <span>Electronics</span>
                <span class="ml-auto">123 bids</span>
              </div>
              <a href="item-single.html" class="btn btn-bid">Submit a Bid</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section pt-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mb-5">
          <span class="caption">How?</span>
          <h2 class="text-black">How <strong>It Works</strong></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="step">
            <span class="wrap-icon icon-user"></span>
            <h3>Register</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed consequatur quaerat magnam sequi nobis ut et iure.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="step">
            <span class="wrap-icon icon-money"></span>
            <h3>Buy or Bid</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed consequatur quaerat magnam sequi nobis ut et iure.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="step">
            <span class="wrap-icon icon-glass"></span>
            <h3>Submit a bid</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed consequatur quaerat magnam sequi nobis ut et iure.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="step last">
            <span class="wrap-icon icon-trophy"></span>
            <h3>Win</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed consequatur quaerat magnam sequi nobis ut et iure.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <img src="temp_web/images/hero_1.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-lg-5 pl-lg-5">
          <div class="mb-5">
            <span class="caption">About?</span>
            <h2 class="text-black">About <strong>Us</strong></h2>
          </div>
          <div class="d-flex feature-icon mb-3">
            <span class="wrap-icon icon-paper-plane mr-2"></span>
            <div>
              <h3>Fast Support</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, debitis!</p>
            </div>
          </div>

          <div class="d-flex feature-icon mb-3">
            <span class="wrap-icon icon-smile-o mr-2"></span>
            <div>
              <h3>Happy Customers</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, debitis!</p>
            </div>
          </div>

          <div class="d-flex feature-icon mb-3">
            <span class="wrap-icon icon-support mr-2"></span>
            <div>
              <h3>24/7 Support</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, debitis!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <span class="caption text-white">Testimonials</span>
          <h2 class=" text-center mb-5 text-white">Happy <strong>Clients</strong></h2>
        </div>
      </div>


      <div class="owl-slide owl-carousel owl-testimonial">

        <div class="ftco-testimonial-1">
          <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
            <img src="temp_web/images/person_1.jpg" alt="Image" class="img-fluid mr-3">
            <div>
              <h3>Allison Holmes</h3>
              <span>Designer</span>
            </div>
          </div>
          <div>
            <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!&rdquo;</p>
          </div>
        </div>

        <div class="ftco-testimonial-1">
          <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
            <img src="temp_web/images/person_2.jpg" alt="Image" class="img-fluid mr-3">
            <div>
              <h3>Allison Holmes</h3>
              <span>Designer</span>
            </div>
          </div>
          <div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
          </div>
        </div>

        <div class="ftco-testimonial-1">
          <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
            <img src="temp_web/images/person_4.jpg" alt="Image" class="img-fluid mr-3">
            <div>
              <h3>Allison Holmes</h3>
              <span>Designer</span>
            </div>
          </div>
          <div>
            <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!&rdquo;</p>
          </div>
        </div>

        <div class="ftco-testimonial-1">
          <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
            <img src="temp_web/images/person_3.jpg" alt="Image" class="img-fluid mr-3">
            <div>
              <h3>Allison Holmes</h3>
              <span>Designer</span>
            </div>
          </div>
          <div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
          </div>
        </div>

        <div class="ftco-testimonial-1">
          <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
            <img src="temp_web/images/person_2.jpg" alt="Image" class="img-fluid mr-3">
            <div>
              <h3>Allison Holmes</h3>
              <span>Designer</span>
            </div>
          </div>
          <div>
            <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!&rdquo;</p>
          </div>
        </div>

        <div class="ftco-testimonial-1">
          <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
            <img src="temp_web/images/person_4.jpg" alt="Image" class="img-fluid mr-3">
            <div>
              <h3>Allison Holmes</h3>
              <span>Designer</span>
            </div>
          </div>
          <div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
          </div>
        </div>

      </div>

    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-7">
          <h2 class="text-black mb-4">Create an account and start Buy, Bid or Sell Now!</h2>
          <a href="#" class="btn btn-primary">Register</a>
        </div>
      </div>
    </div>  
  </div>
@endsection