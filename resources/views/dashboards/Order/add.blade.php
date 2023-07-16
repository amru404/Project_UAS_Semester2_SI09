@extends('template/dashboard/index')
@section('content')

<div class="col">
    <div class="card-rounded-lg">
    <div class="card-body">
        <h2>FORM INPUT ORDER</h2>

<form action="{{ route('order.store') }}" method="POST">
    @csrf

    <div class = "form-group">
        <label for="kode">Kode</label>
        <input type="text" name="kode" id="kode" value="" class="form-control">
    </div>

    <div class = "form-group">
        <label for="qty">QTY</label>
        <input type="text" name="qty" id="qty" value="" class="form-control">
    </div>

    <div class = "form-group">
        <label for="wktu_pesan">Waktu Pemesanan</label>
        <input type="datetime-local" name="wktu_pesan" id="wktu_pesan" value="" class="form-control">
    </div>

    <div class = "form-group">
        <label for="status">Status</label>
        <input type="text" name="status" id="status" value="" class="form-control">
    </div>

    <div class = "form-group">
        <label for="produk_id">produk_id</label>
        <select class="custom-select"  for ="produk_id" name='produk_id' id='produk_id'>
            @foreach ($item as $itemi)
            <option value="{{ $item->id }}" >
                 {{ $item->nama }}
            </option>
            @endforeach
        </select>
    </div>
    
    <div class = "form-group">
        <label for="user_id">User_id</label>
        <select class="custom-select"  for ="user_id" name='user_id' id='user_id'>
            @foreach ($person as $personi)
            <option value="{{ $personi->id }}" >
                 {{ $personi->name }}
            </option>
            @endforeach
        </select>
    </div>


    {{-- <div class = "form-group">
        
        <label for="kategori_id">Kategori</label>
        
    
            
            <select class="custom-select"  for ="Kategori_id" name='kategori_id' id='kategori_id'>
                @foreach ($kategoris as $kategori)
                <option value="{{ $kategori->id }}" >
                     {{ $kategori->name }}
                </option>
                @endforeach
            </select>
        
</div> --}}

    
    

    <button type="submit" class="btn btn-success">Add</button>
 </form>
        
    </div>    
    </div>    
</div> 
@endsection