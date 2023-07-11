@extends('profile/indexProfile')

@section('breadcrumb')
Menunggu Pembayaran
@endsection

@section('content')
    <h2>nama</h2>
    <div class="row">
        <div class="col-md-12">
            @foreach ($barang as $item)
                <p>Nama :{{$item->kode}}</p>
            @endforeach
        </div>
    </div>

@endsection