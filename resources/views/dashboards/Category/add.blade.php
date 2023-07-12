@extends('template/dashboard/index')
@section('content')

<h2>Category-Product input</h2>

<form action="{{ route('category.store') }}" method="POST">
    @csrf
    <div class = "form-group">
        <label for="name">Nama Produk</label>
        <input type="text" name="name" id="name" value="" class="form-control">
    </div>

        {{-- <div class = "form-group">
            <label for="price">Harga Produk</label>
            <input type="timestamp" name="created_at" id="created_at" value="" class="form-control">
        </div>

        <div class = "form-group">
            <label for="description">Deskripsi Produk</label>
            <input type="timestamp" name="updated_at" id="updated_at" value="" class="form-control">
        </div> --}}

    <button type="submit" class="btn btn-transparent btn-outline-info shadow mb-3 text-white">Add</button>
</form>




@endsection