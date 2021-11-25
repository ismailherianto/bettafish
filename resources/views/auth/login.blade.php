@extends('layouts.web')

@section('content')
<div class="site-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <h2 class="mb-5 text-black"><strong>Log In</strong></h2>
          
          <form method="post" action="{{ route('login') }}">
            @csrf
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="useremail">Email</label>
                <input required type="email" name="email" value="{{ old('email') }}" id="useremail" name="useremail" class="form-control form-control-lg @error('email') is-invalid @enderror">
                @error('email')
                  <span style="color: red" role="alert">
                      <strong>Akun belum diaktifkan/terdaftar</strong>
                  </span>
                @enderror
              </div>
              
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="passlogin">Password</label>
                <input required type="password"  id="passlogin" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror">
                @error('password')
                  <span style="color: red" role="alert">
                      <strong>Password Salah / Akun belum diaktifkan</strong>
                  </span>
                @enderror
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

          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="name">Nama Lengkap</label>
                <input required type="text" id="name" name="name" value="{{old('name')}}" class="form-control form-control-lg">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="hp">Nomor HP/WA</label>
                <input required type="text" id="hp" value="{{old('hp')}}" name="hp" class="form-control form-control-lg @error('hp') is-invalid @enderror">
                @error('hp')
                  <span style="color: red" role="alert">
                      <strong>Nomor Tidak Valid</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="femail">Email</label>
                <input required type="email" id="email" value="{{old('emails')}}" name="emails" class="form-control form-control-lg @error('regist_email') is-invalid @enderror">
                @error('regist_email')
                  <span style="color: red" role="alert">
                      <strong>Email Telah Digunakan</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="ig">Instagram</label>
                <input required type="text" id="instagram" value="{{old('instagram')}}" name="instagram" class="form-control form-control-lg">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="address">Alamat</label>
                <input required type="text" id="address" name="alamat" value="{{old('alamat')}}" class="form-control form-control-lg">
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