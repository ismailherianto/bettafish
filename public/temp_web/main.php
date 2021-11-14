<?php //error_reporting(0) ?>
<?php session_start(); ?>
<?php include_once "../config/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Website &mdash; Lelang Bettafish</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



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
            
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                  <a href="main.php" class="nav-link text-left text-black">Home</a>
                </li>
               
              </ul>                                                                
            </nav>

          </div>
          <div class="ml-auto">

            <div class="social-wrap">
              <select id="barang">
                <option disable hidden>Barang</option>
                <option value="0">Lelang</option>
                <option value="1">Toko</option>
              </select>
              <select id="info">
                <option disable hidden>Tentang</option>
                <option value="0">Info Lelang</option>
                <option value="1">Info Toko</option>
              </select>
              <a href="main.php?page=login" class="text-black">Sign In / Register</a>
              
              

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3 text-white" style="position: relative; top: 7px;"></span></a>
              </div>
            </div>

          </div>
        </div>

      </header>


      <?php 
          if($_GET['page'] == '')
          {
            ?>
             <div class="hero-slide owl-carousel site-blocks-cover" style="visibility : <?=$hide?>">
                <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
                  <div class="container">
                    <div class="row align-items-center justify-content-center">
                      <div class="col-md-7 mx-auto text-center" data-aos="fade-up">
                        <h1>Betta Fish</h1>
                      
                        <p><a href="main.php?page=login" class="btn btn-primary">Register</a></p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            <?php
          }
      ?>
     

        <?php include "konten.php"; ?>

        <!-- <div class="site-section pt-0">
          <div class="container">
            <div class="row">
              <div class="col-lg-7 mb-5">
                <span class="caption">Alur Pelelangan</span>
                <h2 class="text-black">Cara <strong>Melelang</strong></h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3">
                <div class="step">
                  <span class="wrap-icon icon-user"></span>
                  <h3>Registrasi</h3>
                  <p>Registrasi sebagai peserta</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="step">
                  <span class="wrap-icon icon-money"></span>
                  <h3>Buka Harga</h3>
                  <p>Membuka harga kepada kandidat untuk menawar harga.</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="step">
                  <span class="wrap-icon icon-glass"></span>
                  <h3>Isi Penawaran</h3>
                  <p>Kandidat akan mengisi harga penawaran dari harga yang dibuka oleh pelelang.</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="step last">
                  <span class="wrap-icon icon-trophy"></span>
                  <h3>Ambil Barang</h3>
                  <p>Jika pelelang telah memilih kandidat dengan harga yang disetujui maka kandidat melanjutkan ke tahap selanjutnya kepada pelelang.</p>
                </div>
              </div>
            </div>
          </div>
        </div> -->

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

      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/jquery.countdown.min.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <script src="js/jquery.sticky.js"></script>
      <script src="js/jquery.mb.YTPlayer.min.js"></script>
      <script src="js/main.js"></script> 
      <script>
        $('document').ready(function(){
          $('#barang').on('change',function(){
            var ini = $(this).val()
            
            if(ini == '1')
            {
              window.location='main.php?page=item_toko'
            }
            else
            {
              window.location='main.php?page=barang'
            }
          })
          $('#info').on('change',function(){
            var ini = $(this).val()
           
            if(ini == '1')
            {
              window.location='main.php?page=info-toko'
            }
            else
            {
              window.location='main.php?page=info-lelang'
            }
          })
        })
      </script>
    </body>

    </html>