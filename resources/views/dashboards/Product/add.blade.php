@extends('template/dashboard/index')
@section('content')
<h2>FORM INPUT PRODUK</h2>

<form action="{{-- route('produk.store') --}}" method="POST">
    @csrf
    <div class = "form-group">
        <label for="name">Nama Produk</label>
        <input type="text" name="name" id="name" value="" class="form-control">
    </div>

    <div class = "form-group">
        <label for="price">Harga Produk</label>
        <input type="number" name="price" id="harga" value="" class="form-control">
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
        <label for="description">Deskripsi Produk</label>
        <input type="text" name="description" id="description" value="" class="form-control">
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

@endsection