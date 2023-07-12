@extends('profile/indexProfile')

@section('breadcrumb')
Data User
@endsection

@section('content')
<div class="col-lg-8">
  <div class="card mb-4">
    <div class="card-body">
      <h5>Data Profile</h5><br>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0 font-weight-bold">Full Name</p>
        </div>
        <div class="col-sm-9">
          <p class="text mb-0">   {{ Auth::user()->name }}</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0 font-weight-bold">Email</p>
        </div>
        <div class="col-sm-9">
          <p class="text mb-0">{{ Auth::user()->email }}</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0 font-weight-bold">No Handphone</p>
        </div>
        <div class="col-sm-9">
          <p class="text mb-0">{{ Auth::user()->no_hp }}</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0 font-weight-bold">Address</p>
        </div>
        <div class="col-sm-9">
          <p class="text mb-0"> {{ Auth::user()->kelurahan }}, {{ Auth::user()->detail_alamat }}, {{ Auth::user()->kecamatan }}, {{ Auth::user()->kabupaten }}, {{ Auth::user()->provinsi }},{{ Auth::user()->kodepos }}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4 mb-md-0">
        <div class="card-body">
          @if ( Auth::user()->role == 'penjual')
          <h5>Produk yang anda jual</h5><br>
          @foreach ($jualan as $data)
          <div class="card mb-3 p-3 text-center" style="border-radius: 20px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
              
            <div class="row">
              <div class="col-12 col-sm-12 col-md-3">
                <img src="{{ asset('img_produk/'.$data->gambar) }}" style="height: 150px; width:160px" alt="">
              </div>
              <div class="col-12 col-sm-6 col-md-5">
                <h5 class="mt-3">{{$data->nama}}</h5>
                <h6>Rp. {{number_format($data->harga, 2)}}</h6>
                <p>stok : {{$data->stok}}</p>

              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="btn-group mt-5" role="group" aria-label="Basic example">
                  <button type="button" class="btn  btn-success"><i class="fa-solid fa-pen-to-square"></i> </button>
                  <button type="button" class="btn  btn-warning text-white"><i class="fa-solid fa-eye"></i></button>
                  <button type="button" class="btn  btn-danger"><i class="fa-solid fa-trash"></i></button>
                </div>
              </div>
            </div>
          </div>
           @endforeach


           @elseif ( Auth::user()->role == 'admin')
           <h5>Produk yang anda jual</h5><br>
           <div class="card">
            @foreach ($produkJualan as $data)
  
            <p>{{$data['nama']}}</p>
                
            @endforeach
 

           @else 

           <h5 class="text-center">Mulai Jualan Yuk!</h5>
          @endif
         </div>
        
          
      </div>
    </div>
  </div>
</div>

@endsection
