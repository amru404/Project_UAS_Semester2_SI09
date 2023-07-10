@extends ('template/dashboard/index')
@section('content')
<div class="col-lg-12">
  <div class="card rounded-lg">
    <div class="card-body">
      <h5 class="card-title">Product </h5>
      <a href="{{ route('addCategory') }}" class= "btn btn-transparent btn-outline-info shadow mb-3 text-white" >Add Produk</a>
<div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Kategori</th>
            <th scope="col">created_at</th>
            <th scope="col">Update_at</th>
            
          </tr>
        </thead>
        <tbody>
          @php $number =1; @endphp
@foreach ($kategoris as $item)
          <tr>
            <td>{{ $number++ }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
            <td> <a href="{{ route('category.edit', $item) }}" class="btn btn-transparent btn-outline-warning shadow mb-3 text-white">Edit</a>
              <form action="{{ route('category.destroy', $item) }}" method="POST" style="display: inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" onclick="return confirm('Delete this category?')" class="btn btn-transparent btn-outline-danger shadow mb-3 text-white">Delete</button>
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