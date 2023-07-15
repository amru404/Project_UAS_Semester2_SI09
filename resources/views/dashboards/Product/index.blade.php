@extends('template/dashboard/index')
@section('content')
<div class="col">
    <div class="card rounded-lg">
      <div class="card-body">
        <h5 class="card-title">Product </h5>
        <a href="{{ route('product.add') }}" class= "btn btn-transparent btn-outline-info shadow mb-3 text-white" >Add Produk</a>
  <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kode</th>
              <th scope="col">Nama Produk</th>
              <th scope="col">Harga</th>
              <th scope="col">Stok</th>
              <th scope="col">Min_Stok</th>
              <th scope="col">Gambar</th>
              <th scope="col">Deskripsi Produk</th>
              <th scope="col">Kategori</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @php $number =1; @endphp
  @foreach ($produk as $item)
            <tr>
              <td>{{ $number++ }}</td>
              <td>{{ $item->kode }}</td>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->harga }}</td>
              <td>{{ $item->stok }}</td>
              <td>{{ $item->min_stok }}</td>
              <td>{{ $item->gamber }}</td>
              <td>{{ $item->deskripsi_produk }}</td>
              <td>{{ $item->kategori_id }}</td>
              <td> <a href="{{ route('product.edit', $item) }}" class="btn btn-transparent btn-outline-warning shadow mb-3 text-white">Edit</a>
                <form action="{{ route('product.destroy', $item) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this Product?')" class="btn btn-transparent btn-outline-danger shadow mb-3 text-white">Delete</button>
                </form></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>
    </div>
  </div> 
  
  </div> 

@endsection