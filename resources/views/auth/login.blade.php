

@extends('layouts.app')
@section('content')


<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');

body{
	font-family: 'Poppins', sans-serif;
	font-weight: 300;
	font-size: 15px;
	line-height: 1.7;
	color: #c4c3ca;
	background-color: #1f2029;
	overflow-x: hidden;
}
a {
	cursor: pointer;
  transition: all 200ms linear;
}
a:hover {
	text-decoration: none;
}
.link {
  color: #c4c3ca;
}
.link:hover {
  color: #ffeba7;
}
p {
  font-weight: 500;
  font-size: 14px;
  line-height: 1.7;
}
h4 {
  font-weight: 600;
}
h6 span{
  padding: 0 20px;
  text-transform: uppercase;
  font-weight: 700;
}
.section{
  position: relative;
  width: 100%;
  display: block;
}
.full-height{
  min-height: 100vh;
}
[type="checkbox"]:checked,
[type="checkbox"]:not(:checked){
  position: absolute;
  left: -9999px;
}
.checkbox:checked + label,
.checkbox:not(:checked) + label{
  position: relative;
  display: block;
  text-align: center;
  width: 60px;
  height: 16px;
  border-radius: 8px;
  padding: 0;
  margin: 10px auto;
  cursor: pointer;
  background-color: #ffeba7;
}
.checkbox:checked + label:before,
.checkbox:not(:checked) + label:before{
  position: absolute;
  display: block;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  color: #ffeba7;
  background-color: #102770;
  font-family: "Font Awesome 5 Free";
   content: ">";
  z-index: 20;
  top: -10px;
  left: -10px;
  line-height: 36px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}
.checkbox:checked + label:before {
  transform: translateX(44px) rotate(-270deg);
}


.card-3d-wrap {
  position: relative;
  width: 440px;
  max-width: 100%;
  height: 700px;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  perspective: 800px;
  margin-top: 60px;
}
.card-3d-wrapper {
  width: 100%;
  height: 700px;
  position:absolute;    
  top: 0;
  left: 0;  
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  transition: all 600ms ease-out; 
}
.card-front, .card-back {
  width: 100%;
  height: 700px;
  background-color: #2a2b38;
  background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg');
  background-position: bottom center;
  background-repeat: no-repeat;
  background-size: 300%;
  position: absolute;
  border-radius: 6px;
  left: 0;
  top: 0;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden;
}
.card-back {
  transform: rotateY(180deg);
}
.checkbox:checked ~ .card-3d-wrap .card-3d-wrapper {
  transform: rotateY(180deg);
}
.center-wrap{
  position: absolute;
  width: 100%;
  padding: 0 35px;
  top: 50%;
  left: 0;
  transform: translate3d(0, -50%, 35px) perspective(100px);
  z-index: 20;
  display: block;
}


.form-group{ 
  position: relative;
  display: block;
    margin: 0;
    padding: 0;
}
.form-style {
  padding: 13px 20px;
  padding-left: 55px;
  height: 48px;
  width: 100%;
  font-weight: 500;
  border-radius: 4px;
  font-size: 14px;
  line-height: 22px;
  letter-spacing: 0.5px;
  outline: none;
  color: #c4c3ca;
  background-color: #1f2029;
  border: none;
  -webkit-transition: all 200ms linear;
  transition: all 200ms linear;
  box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
}
.form-style:focus,
.form-style:active {
  border: none;
  outline: none;
  box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
}
.input-icon {
  position: absolute;
  top: 0;
  left: 18px;
  height: 48px;
  font-size: 15px;
  line-height: 48px;
  text-align: left;
  color: #ffeba7;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}

.form-group input:-ms-input-placeholder  {
  color: #c4c3ca;
  opacity: 0.7;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input::-moz-placeholder  {
  color: #c4c3ca;
  opacity: 0.7;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:-moz-placeholder  {
  color: #c4c3ca;
  opacity: 0.7;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input::-webkit-input-placeholder  {
  color: #c4c3ca;
  opacity: 0.7;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:focus:-ms-input-placeholder  {
  opacity: 0;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:focus::-moz-placeholder  {
  opacity: 0;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:focus:-moz-placeholder  {
  opacity: 0;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:focus::-webkit-input-placeholder  {
  opacity: 0;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}

.btn{  
  border-radius: 4px;
  height: 44px;
  font-size: 13px;
  font-weight: 600;
  text-transform: uppercase;
  -webkit-transition : all 200ms linear;
  transition: all 200ms linear;
  padding: 0 30px;
  letter-spacing: 1px;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  text-align: center;
  border: none;
  background-color: #ffeba7;
  color: #102770;
  box-shadow: 0 8px 24px 0 rgba(255,235,167,.2);
}
.btn:active,
.btn:focus{  
  background-color: #102770;
  color: #ffeba7;
  box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
}
.btn:hover{  
  background-color: #102770;
  color: #ffeba7;
  box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
}




.logo {
	position: absolute;
	top: 30px;
	right: 30px;
	display: block;
	z-index: 100;
	transition: all 250ms linear;
}
.logo img {
	height: 26px;
	width: auto;
	display: block;
}
</style>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                      <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                      <label for="reg-log"></label>
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        {{-- Login --}}
                                        <h4 class="mb-4 pb-3">Log In</h4>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-style @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Your Email" required autocomplete="email" autocomplete="off">
                                            <i class="input-icon fa-solid fa-at"></i>
                                        </div>	
                                        <div class="form-group mt-2">
                                            <input  placeholder="Your Password"  id="password" type="password" class="form-style @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"autocomplete="off">
                                            <i class="input-icon fa-solid fa-lock"></i>
                                        </div>
                                        <button type="submit"  class="btn mt-4">submit</button>
                                        <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
                                        </form>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-4 text-center">
                                            <button  onclick="myFunction()" class="btn" style="width:100%"><i class="fa-brands fa-google"></i></button>
                                        </div>
                                        <div class="col-4 text-center">
                                            <button  onclick="myFunction()" class="btn" style="width:100%"><i class="fa-brands fa-facebook"></i></button>
                                        </div>
                                        <div class="col-4 text-center">
                                            <button  onclick="myFunction()" class="btn" style="width:100%"><i class="fa-brands fa-twitter"></i></button>
                                        </div>
                                      </div>
                                    {{-- End Login --}}
                                  </div>
                              </div>

                              {{-- Register --}}
                            <div class="card-back">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">Sign Up</h4>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-style" id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}" required autocomplete="name" autocomplete="off" placeholder="Your Full Name">
                                            <i class="input-icon fa-solid fa-signature"></i>
                                        </div>	
                                        <div class="form-group mt-2">
                                            <input id="email" type="email" class="form-style @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Your Email" required autocomplete="email" autocomplete="off">
                                            <i class="input-icon fa-solid fa-at"></i>
                                        </div>	

                                        <div class="form-group mt-2">
                                            <input id="no_hp" type="number" class="form-style @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp" autocomplete="off" placeholder="Your Number">
                                            <i class="input-icon fa-solid fa-phone"></i>
                                        </div>	
                                        <div class="form-group mt-2">
                                            <input id="tmp_lahir" type="text"
                                            class="form-style @error('tmp_lahir') is-invalid @enderror" name="tmp_lahir"
                                            value="{{ old('tmp_lahir') }}" required autocomplete="tmp_lahir" autofocus autocomplete="off" placeholder="Your Place f Birth">
                                            <i class="input-icon fa-solid fa-location-dot"></i>
                                        </div>	

                                        <div class="form-group mt-2">
                                            <input id="tgl_lahir" type="date"
                                            class="form-style @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir"
                                            value="{{ old('tgl_lahir') }}" required autocomplete="tgl_lahir" autofocus autocomplete="off" placeholder="Your Date Of Birth">
                                            <i class="input-icon fa-solid fa-calendar-days"></i>
                                        </div>	
                                        
                                        <div class="form-group mt-2">
                                            <input id="password" type="password"
                                            class="form-style @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password" placeholder="Your Password" autocomplete="off">
                                            <i class="input-icon fa-solid fa-lock"></i>
                                        </div>

                                        <div class="form-group mt-2">
                                            <input id="password-confirm" type="password" class="form-style"
                                            name="password_confirmation" required autocomplete="new-password"  placeholder="Confirm Password">
                                            <i class="input-icon fa-solid fa-lock"></i>
                                        </div>

                                        
                                        <input type="hidden" name="provinsi" value="-">
                                        <input type="hidden" name="nik" value="0">
                                        <input type="hidden" name="kabupaten" value="-">
                                        <input type="hidden" name="kecamatan" value="-">
                                        <input type="hidden" name="kelurahan" value="-">
                                        <input type="hidden" name="kodepos" value="0">
                                        <input type="hidden" name="no_hp" value="0">
                                        <input type="hidden" name="img_ktp" value="-">
                                        <input type="hidden" name="img_ktp_selfi" value="-">
                                        <input type="hidden" name="detail_alamat" value="-">
                                        <input type="hidden" name="role" value="pembeli">
                                        <input type="hidden" name="status" value="-">

                                        
                                        <button type="submit"  class="btn mt-4">submit</button>
                                      </div>
                                  </div>
                                </form>
                              </div>
                          </div>
                          {{-- End Register --}}

                          
                      </div>
                  </div>
              </div>
          </div>
    </div>
</div>

<script>
    function myFunction() {
  alert("Apaansi Goblokk!");
}
</script>

@endsection
