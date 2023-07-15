@extends('template/dashboards/index')
@section('content')

<div class="col">
    <div class="card-rounded-lg">
    <div class="card-body">
        <h2>FORM INPUT ORDER</h2>

<form action="{{-- route('product.store') --}}" method="POST">
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
        <input type="datetime-local" name="" id="wktu_pesan" value="" class="form-control">
    </div>

    <div class = "form-group">
        <label for="status">Status</label>
        <input type="text" name="status" id="status" value="" class="form-control">
    </div>

    <div class = "form-group">
        <label for="min_stok">Min Stok</label>
        <input type="text" name="min_stok" id="min_stok" value="" class="form-control">
    </div>
    <div class="form-group row">
        <label for="gambar" class="col-2 col-form-label">Gambar Produk</label> 
        <div class="col-10">
          <input id="gambar" name="gambar" type="file" class="form-control">
        </div>
        </div>
    <div class = "form-group">
        <label for="deskripsi_produk">Deskripsi Produk</label>
        <input type="text" name="deskripsi_produk" id="deskripsi_produk" value="" class="form-control">
    </div>


    <div class = "form-group">
        
        <label for="kategori_id">Kategori</label>
        
    
            
            <select class="custom-select"  for ="Kategori_id" name='kategori_id' id='kategori_id'>
                @foreach ($kategoris as $kategori)
                <option value="{{ $kategori->id }}" >
                     {{ $kategori->name }}
                </option>
                @endforeach
            </select>
        
</div>

    
    

    <button type="submit" class="btn btn-success">Add</button>
 </form>
        
    </div>    
    </div>    
</div> 
@endsection