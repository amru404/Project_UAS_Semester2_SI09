@extends('pembeli/indexProfile')

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
          <p class="mb-0">Full Name</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0">   {{ Auth::user()->name }}</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Email</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">No Handphone</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0">{{ Auth::user()->no_hp }}</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Address</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0"> {{ Auth::user()->kelurahan }}, {{ Auth::user()->detail_alamat }}, {{ Auth::user()->kecamatan }}, {{ Auth::user()->kabupaten }}, {{ Auth::user()->provinsi }},{{ Auth::user()->kodepos }}</p>
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
          <div class="card">
           @foreach ($jualan as $data)
           
           <p>nama : {{$data->UserID->nama  }}</p>
           <p>stok : {{$data->stok}}</p>
           <p>harga : {{$data->harga}}</p>
           {{-- <p>terjual : {{$da}}</p> --}}
           <p>gambar : {{$data->gambar}}</p>
               <hr>
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
