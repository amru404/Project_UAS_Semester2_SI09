@extends('profile/indexProfile')

@section('breadcrumb')
Tambah Produk
@endsection

@section('content')
<div class="col-lg-8">
    <div class="card mb-4">
      <div class="card-body">
        <h5>Tambah Produk</h5><br>
    <form action="{{ route('profile.store.produk') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('post')

            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <div class="form-group row">
              <label for="kode" class="col-4 col-form-label">Kode</label> 
              <div class="col-8">
                <input id="kode" name="kode" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
                <label for="kategori_id" class="col-4 col-form-label">kategori</label> 
                <div class="col-8">
                <select id="kategori_id" name="kategori_id" class="custom-select text-dark">
                    @foreach ($kategori as $kategori)
                         <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-4 col-form-label">Nama Produk</label> 
              <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="stok" class="col-4 col-form-label">Stok</label> 
              <div class="col-8">
                <input id="stok" name="stok" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="min_stok" class="col-4 col-form-label">Minimal Stok</label> 
              <div class="col-8">
                <input id="min_stok" name="min_stok" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="gambar" class="col-4 col-form-label">Gambar Produk</label> 
              <div class="col-8">
                <input id="gambar" name="gambar" type="file" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="harga" class="col-4 col-form-label">Harga</label> 
              <div class="col-8">
                <input id="harga" name="harga" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="deskripsi_produk" class="col-4 col-form-label">Deskripsi Produk</label> 
              <div class="col-8">
                <textarea id="deskripsi_produk" name="deskripsi_produk" cols="40" rows="3" class="form-control"></textarea>
              </div>
            </div> 
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    

@endsection