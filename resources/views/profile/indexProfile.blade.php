{{-- @extends('template/app') --}}


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        .list-group li.active{
            opacity: 100%;
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
  box-shadow: 0 8px 24px 0 rgba(255,235,167,.2)
        }
        .list-group li{
            opacity: 50%;
        }

        body{
          background-color: #1f2029;
        }
        .card{
          background-color: #2a2b38;
          color: white;
        }

    </style>

    <title>Hello, world!</title>
  </head>
  <body>
    <section>
        <div class="container py-5">
          <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb" class="bg-dark rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0" style="border-radius: 4px;
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
                box-shadow: 0 8px 24px 0 rgba(255,235,167,.2)">
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">User Profile</a></li>
                  <li class="breadcrumb-item active" aria-current="page">@yield('breadcrumb')</li>
                </ol>
              </nav>
            </div>
          </div>
      
          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
                  <h5 class="my-3">{{ Auth::user()->name }}</h5>
                  <p class="text mb-1">{{ Auth::user()->role }}</p>
                  <p class="text mb-4">{{ Auth::user()->provinsi }}, {{ Auth::user()->kabupaten }}</p>
                  <div class="d-flex justify-content-center mb-2">
                    @if (  Auth::user()->role  == 'penjual')
                    <a href="{{ route('profile.create.produk')}}" class="btn ms-1" style="border-radius: 4px;
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
                    box-shadow: 0 8px 24px 0 rgba(255,235,167,.2);">Jual Produk</a>
                 
                    @else
                    <a href="{{ route('formPenjual',$user->id)}}" class="btn ms-1" style="border-radius: 4px;
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
                      box-shadow: 0 8px 24px 0 rgba(255,235,167,.2);">Menjadi Penjual</a>
                    
                    @endif


                  </div>
                </div>
              </div>
              <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                  <ul class="list-group list-group-flush rounded-3">
                    <a href="{{ route('user.profile') }}" style="text-decoration: none;">  
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3 {{ (request()->is('profile')) ? 'active' : '' }}">
                        <img src="../../../public/img/user.png" style="height: 35px;" alt="">
                       
                        <p class="mb-0 text-dark">Profile</p>
                      </li>
                    </a>

                    <a href="{{ route('user.menungguBayar') }}" style="text-decoration: none;">  
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3 {{ (request()->is('profile/menungguBayar')) ? 'active' : '' }}">
                        <img src="../../../public/img/menunggu_pembayaran.png" style="height: 43px;" alt="">
                      <p class="mb-0 text-dark">Menunggu dibayar</p>
                    </li>
                    </a>

                    <a href="{{ route('user.sudahBayar') }}" style="text-decoration: none;">  
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3 {{ (request()->is('profile/sudahBayar')) ? 'active' : '' }}">
                        <img src="../../../public/img/pesanan dibayar.png" style="height: 35px;" alt="">

                      <p class="mb-0 text-dark">Pesanan Dibayar</p>
                    </li>
                    </a>

                    <a href="{{ route('user.sudahDikrim') }}" style="text-decoration: none;">  
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3 {{ (request()->is('profile/sudahDikirim')) ? 'active' : '' }}">
                        <img src="../../../public/img/sudah dikirim.png" style="height: 35px;" alt="">

                      <p class="mb-0 text-dark">Sudah Dikirim</p>
                    </li>
                    </a>

                    <a href="{{ route('user.pesananDibatalkan') }}" style="text-decoration: none;">  
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3 {{ (request()->is('profile/pesananDibatalkan')) ? 'active' : '' }}">
                        <img src="../../../public/img/cancel.png" style="height: 35px;" alt="">

                      <p class="mb-0 text-dark">Pesanan Dibatalkan</p>
                    </li>
                    </a>

                  </ul>
                </div>
              </div>
            </div>
            {{-- Content --}}

            @yield('content')

            {{-- end content --}}
          </div>
        </div>
      </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>