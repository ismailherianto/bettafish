<!DOCTYPE html>
<html lang="en">

<head>
  <title>Auction &mdash; Website by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('temp_web/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{asset('temp_web/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('temp_web/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('temp_web/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('temp_web/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('temp_web/css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{asset('temp_web/css/jquery.fancybox.min.css')}}">

  <link rel="stylesheet" href="{{asset('temp_web/css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{asset('temp_web/fonts/flaticon/font/flaticon.css')}}">

  <link rel="stylesheet" href="{{asset('temp_web/css/aos.css')}}">
  <link href="{{asset('temp_web/css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{asset('temp_web/css/style.css')}}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>



    <header class="site-navbar py-4 site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="{{route('website')}}" class="nav-link text-left text-black">Home</a>
                </li>
              </ul>                                                                
            </nav>

          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                
                <li class="has-children">
                  <a href="javascript:void(0)" class="nav-link text-left text-black">Barang</a>
                  <ul class="dropdown">
                    <li><a href="{{route('toko')}}">Barang Toko</a></li>
                    <li><a href="{{route('lelang')}}">Barang Lelang</a></li> 
                  </ul>
                </li>
                <li class="has-children">
                  <a href="javascript:void(0)" class="nav-link text-left text-black">Tentang</a>
                  <ul class="dropdown">
                    <li><a href="services.html">Info Lelang</a></li>
                    <li><a href="services.html">Info Toko</a></li>
                  </ul>
                </li>
                <li>
                  <a href="{{route('login-regist')}}" class="text-black">Sign In / Register</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>

      </header>

        @yield('content')

        <div class="footer">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="copyright">
                  <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
      <!-- .site-wrap -->


      <!-- loader -->
      <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

      <script src="{{asset('temp_web/js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{asset('temp_web/js/jquery-migrate-3.0.1.min.js')}}"></script>
      <script src="{{asset('temp_web/js/jquery-ui.js')}}"></script>
      <script src="{{asset('temp_web/js/popper.min.js')}}"></script>
      <script src="{{asset('temp_web/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('temp_web/js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('temp_web/js/jquery.stellar.min.js')}}"></script>
      <script src="{{asset('temp_web/js/jquery.countdown.min.js')}}"></script>
      <script src="{{asset('temp_web/js/bootstrap-datepicker.min.js')}}"></script>
      <script src="{{asset('temp_web/js/jquery.easing.1.3.js')}}"></script>
      <script src="{{asset('temp_web/js/aos.js')}}"></script>
      <script src="{{asset('temp_web/js/jquery.fancybox.min.js')}}"></script>
      <script src="{{asset('temp_web/js/jquery.sticky.js')}}"></script>
      <script src="{{asset('temp_web/js/jquery.mb.YTPlayer.min.js')}}"></script>
      <script src="{{asset('temp_web/js/main.js')}}"></script>
      @yield('script')

    </body>

    </html>