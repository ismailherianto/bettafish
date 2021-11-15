@extends('layouts.web')

@section('content')
<div class="site-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <h2 class="mb-5 text-black"><strong>Log In</strong></h2>
          <form method="post">
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="useremail">Email</label>
                <input required type="email" id="useremail" name="useremail" class="form-control form-control-lg">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="passlogin">Password</label>
                <input required type="password" id="passlogin" name="password" class="form-control form-control-lg">
              </div>
            </div>
            
            <div class="row">
              <div class="col-12">
                <input type="submit" name="login" value="Login" class="btn btn-primary btn-lg px-5">
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-5">
          <h2 class="mb-5 text-black"><strong>Registrasi</strong></h2>

          <form method="POST" action="">
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="name">Nama Lengkap</label>
                <input required type="text" id="name" name="name" class="form-control form-control-lg">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="hp">Nomor HP/WA</label>
                <input required type="text" id="hp" name="hp" class="form-control form-control-lg">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="femail">Email</label>
                <input required type="email" id="email" name="email" class="form-control form-control-lg">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="address">Alamat</label>
                <input required type="text" id="address" name="alamat" class="form-control form-control-lg">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="fpass">Password</label>
                <input minlength="6" oninvalid="this.setCustomValidity('Minimal 6 Karakter')" oninput="this.setCustomValidity('')" required type="password" id="fpass" name="password" class="form-control form-control-lg">
                <!-- <div id="error_msg" style="color : red;"></div> -->
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="fpass2">Re-type Password</label>
                <input required minlength="6" type="password" id="fpass2" name="password2" class="form-control form-control-lg">  
              </div>
            </div>
            
            <div class="row">
              <div class="col-12">
                <input type="submit" value="Register" id="submit_btn" class="btn btn-primary btn-lg px-5">
              </div>
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
@endsection