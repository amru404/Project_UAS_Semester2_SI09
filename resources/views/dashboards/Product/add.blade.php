@extends('template/dashboard/index')
@section('content')

<div class="col">
    <div class="card-rounded-lg">
    <div class="card-body">
        <h2>FORM INPUT PRODUK</h2>

<form action="{{ route('product.store') }}" method="POST">
    @csrf

    <div class = "form-group">
        <label for="kode">Kode Produk</label>
        <input type="text" name="kode" id="kode" value="" class="form-control">
    </div>

    <div class = "form-group">
        <label for="nama">Nama Produk</label>
        <input type="text" name="nama" id="nama" value="" class="form-control">
    </div>

    <div class = "form-group">
        <label for="harga">Harga Produk</label>
        <input type="number" name="harga" id="harga" value="" class="form-control">
    </div>

    <div class = "form-group">
        <label for="stok">Stok</label>
        <input type="text" name="stok" id="stok" value="" class="form-control">
    </div>

    <div class = "form-group">
        <label for="min_stok">Min Stok</label>
        <input type="text" name="min_stok" id="min_stok" value="" class="form-control">
    </div>

    <div class = "form-group">
        <label for="deskripsi_produk">Deskripsi Produk</label>
        <input type="text" name="deskripsi_produk" id="deskripsi_produk" value="" class="form-control">
    </div>


    <div class = "form-group">
        <div class="col-md-8">
        <label for="kategori_id">Kategori Id</label>
        </div>
        <div class="col-md"> 
            
            <select class="form-select"  for ="Kategori_id" name='kategori_id' id='kategori_id'>
                @foreach ($kategoris as $kategori)
                <option value="{{ $kategori->id }}">
                    {{ $kategori->id }} - {{ $kategori->nama }}
                </option>
                @endforeach
            </select>
        </div>
</div>

    
    

    <button type="submit" class="btn btn-success">Add</button>
 </form>
        
    </div>    
    </div>    
</div>    
@endsection