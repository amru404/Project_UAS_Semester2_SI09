@extends('profile/indexProfile')

@section('breadcrumb')
Belum Dibayar
@endsection

<style>
  .card{
    border-radius: 10px;
    background-color: white;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      }
</style>
@section('content')
<div class="col-lg-8">
    <div class="card mb-4">
      <div class="card-body">
        <h5>Belum Dibayar</h5><br>

        {{-- {{$barang->Produk->nama}} --}}

        {{-- @foreach ($barang as $item) --}}
{{-- 
        @foreach ($kode as $item)
            {{$item}}
            {{$item[0]}}
        @endforeach --}}
       
            {{-- @foreach ($pesanan as $data)
            <p>Kode Pesanan :{{$data->kode}}</p>
            <p>Status : {{$data->status}}</p>
            <p>Status : {{$data->qty}}</p>
            <p>Total Harga : Rp. {{ number_format($data->qty * $data->Produk->harga,2)}}</p>
            <p>{{$data->Produk->nama}}</p>
            <img src="{{ asset('img_produk/'.$data->Produk->gambar) }}" style="height: 150px; width:160px" alt="">
            @endforeach --}}

            @foreach ($pesanan as $data)
            <div class="card text-dark mt-3 p-3" style="background-color: #ffeba7">
            <div class="row">
              <div class="col-xl-4 col-md-4 col-12">
            <img src="{{ asset('img_produk/'.$data->Produk->gambar) }}" style="height: 150px; width:160px" alt="">
              </div>
              <div class="col-xl-5 col-md-5 col-12">
            <h6>{{$data->Produk->nama}}</h6>
            <p>{{$data->status}} Pembayaran</p>
            <p>Quantity : {{$data->qty}}</p>
            <p>Total Harga : Rp. {{ number_format($data->qty * $data->Produk->harga,2)}}</p>
              </div>

              <div class="col-xl-3 col-md-5 col-12">
                <a href="" class="btn btn-sm btn-primary">Bayar Pesanan</a>
              </div>
            </div>  
          </div>
          @endforeach

        </div>
      </div>
    </div>
    

@endsection