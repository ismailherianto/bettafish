<!DOCTYPE html>
<html lang="en">

<head>
  <title>Auction &mdash; Website by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="temp_web/fonts/icomoon/style.css">

  <link rel="stylesheet" href="temp_web/css/bootstrap.min.css">
  <link rel="stylesheet" href="temp_web/css/jquery-ui.css">
  <link rel="stylesheet" href="temp_web/css/owl.carousel.min.css">
  <link rel="stylesheet" href="temp_web/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="temp_web/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="temp_web/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="temp_web/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="temp_web/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="temp_web/css/aos.css">
  <link href="temp_web/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="temp_web/css/style.css">



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
          <div class="site-logo">
            <a href="index.html" class="d-block">
              <img src="temp_web/images/logo.png" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="index.html" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="buy.html" class="nav-link text-left">Buy</a>
                </li>
                <li>
                  <a href="buy.html" class="nav-link text-left">Sell</a>
                </li>
                
                <li class="has-children">
                  <a href="services.html" class="nav-link text-left">Services</a>
                  <ul class="dropdown">
                    <li><a href="services.html">Sell Items</a></li>
                    <li><a href="services.html">Buy Items</a></li>
                    <li><a href="services.html">Submit a Bid</a></li>
                  </ul>
                </li>
                <li>
                  <a href="blog.html" class="nav-link text-left">Blog</a>
                </li>
                <li>
                  <a href="about.html" class="nav-link text-left">About</a>
                </li>
                
                <li>
                  <a href="contact.html" class="nav-link text-left">Contact</a>
                </li>
              </ul>                                                                
            </nav>

          </div>
          <div class="ml-auto">

            <div class="social-wrap">
              <a href="login.html" class="text-white">Sign In / Register</a>
              

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3 text-white" style="position: relative; top: 7px;"></span></a>
              </div>
            </div>

          </div>
        </div>

      </header>


      <!-- <div class="hero-slide owl-carousel site-blocks-cover"> -->
        <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-7 mx-auto text-center" data-aos="fade-up">
                <h1>The Best Place to Buy and Sell</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, nihil.</p>
                <p><a href="#" class="btn btn-primary">Register</a></p>
              </div>
            </div>
          </div>
        </div>
        

        <!-- </div> -->


        @yield('content')

        

        <div class="footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-3">
                <p class="mb-4"><img src="temp_web/images/logo_footer.png" alt="Image" class="img-fluid"></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>  
                <p><a href="#">Learn More</a></p>
              </div>
              <div class="col-lg-3">
                <h3 class="footer-heading"><span>Solutions</span></h3>
                <ul class="list-unstyled">
                  <li><a href="#">Register</a></li>
                  <li><a href="#">Login</a></li>
                  <li><a href="#">Buy</a></li>
                  <li><a href="#">Sell</a></li>
                  <li><a href="#">Submit a bid</a></li>
                </ul>
              </div>
              <div class="col-lg-3">
                <h3 class="footer-heading"><span>Services</span></h3>
                <ul class="list-unstyled">
                  <li><a href="#">Register</a></li>
                  <li><a href="#">Login</a></li>
                  <li><a href="#">Buy</a></li>
                  <li><a href="#">Sell</a></li>
                  <li><a href="#">Submit a bid</a></li>
                </ul>
              </div>
              <div class="col-lg-3">
                <h3 class="footer-heading"><span>Contact</span></h3>
                <ul class="list-unstyled">
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Support Community</a></li>
                  <li><a href="#">Press</a></li>
                  <li><a href="#">Share Your Story</a></li>
                  <li><a href="#">Our Supporters</a></li>
                </ul>
              </div>
            </div>

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

      <script src="temp_web/js/jquery-3.3.1.min.js"></script>
      <script src="temp_web/js/jquery-migrate-3.0.1.min.js"></script>
      <script src="temp_web/js/jquery-ui.js"></script>
      <script src="temp_web/js/popper.min.js"></script>
      <script src="temp_web/js/bootstrap.min.js"></script>
      <script src="temp_web/js/owl.carousel.min.js"></script>
      <script src="temp_web/js/jquery.stellar.min.js"></script>
      <script src="temp_web/js/jquery.countdown.min.js"></script>
      <script src="temp_web/js/bootstrap-datepicker.min.js"></script>
      <script src="temp_web/js/jquery.easing.1.3.js"></script>
      <script src="temp_web/js/aos.js"></script>
      <script src="temp_web/js/jquery.fancybox.min.js"></script>
      <script src="temp_web/js/jquery.sticky.js"></script>
      <script src="temp_web/js/jquery.mb.YTPlayer.min.js"></script>
      <script src="temp_web/js/main.js"></script>
      @yield('script')

    </body>

    </html>