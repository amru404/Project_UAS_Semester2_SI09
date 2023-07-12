@extends('profile/indexProfile')

@section('breadcrumb')
Belum Dibayar
@endsection

@section('content')
<div class="col-lg-8">
    <div class="card mb-4">
      <div class="card-body">
        <h5>Belum Dibayar</h5><br>

        {{-- {{$barang->Produk->nama}} --}}

        @foreach ($barang as $item)
            <p>Nama :{{$item->kode}}</p>
            <p>Nama : {{$item->status}}</p>
            <p>Nama : {{$item->Produk->nama}}</p>
        @endforeach
        </div>
      </div>
    </div>
    

@endsection