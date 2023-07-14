@extends('template/dashboard/index')
@section('content')
<div class="card">
    <div class="card-body">
    <div class="card-title">Edit Category-Product</div>
    <hr>
     <form action="{{ route('product.update', $produk->id) }}" method="POST">
         @csrf
         @method('put')

         <div class = "form-group">
            <label for="kode">Kode Produk</label>
            <input type="text" name="kode" id="kode" value="{{ $produk->kode}}" class="form-control">
        </div>
    
        <div class = "form-group">
            <label for="nama">Nama Produk</label>
            <input type="text" name="nama" id="nama" value="{{ $produk->nama }}" class="form-control">
        </div>
    
        <div class = "form-group">
            <label for="harga">Harga Produk</label>
            <input type="number" name="harga" id="harga" value="{{ $produk->harga }}" class="form-control">
        </div>
    
        <div class = "form-group">
            <label for="stok">Stok</label>
            <input type="text" name="stok" id="stok" value="{{ $produk->stok }}" class="form-control">
        </div>
    
        <div class = "form-group">
            <label for="min_stok">Min Stok</label>
            <input type="text" name="min_stok" id="min_stok" value="{{ $produk->min_stok }}" class="form-control">
        </div>
    
        <div class = "form-group">
            <label for="deskripsi_produk">Deskripsi Produk</label>
            <input type="text" name="deskripsi_produk" id="deskripsi_produk" value="{{ $produk->deskripsi_produk }}" class="form-control">
        </div>
    
    
        <div class = "form-group">
            <div class="col-md-8">
            <label for="kategori_id">Kategori Id</label>
            </div>
            <div class="col-md"> 
                
                <select class="form-select"  for ="Kategori_id" name='kategori_id' id='kategori_id' value ='{{ $produk->kategori_id}}'>
                    @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">
                        {{ $kategori->id }} - {{ $kategori->nama }}
                    </option>
                    @endforeach
                </select>
            </div>
    </div>
    

    <div class="form-group">
     <button type="submit" class="btn btn-light btn-round ">Edit</button>
   </div>
   </form>
  </div>
  </div>
</div>
@endsection