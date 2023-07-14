@extends('template/dashboard/index')
@section('content')
<div class="card mt-3">
    <div class="card-content">
        <div class="card-rounded-lg">
            <div class="card-body">
                <h5 class="card-title">Orders</h5>
                <a href="{{-- route('addOrder')--}}" class="btn btn-transparent btn-outline-info shadow mb-3 text-white"> Add Order </a>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Waktu Pesanan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Produk_id</th>
                                <th scope="col">User_id</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $number =1; @endphp
                            @foreach($order as $pesanan)
                            <tr>
                                <td>{{ $number++ }}</td>
                                <td>{{ $pesanan->kode }}</td>
                                <td>{{ $pesanan->qty }}</td>
                                <td>{{ $pesanan->wktu_pesan }}</td>
                                <td>{{ $pesanan->status }}</td>
                                <td>{{ $pesanan->produk_id }}</td>
                                <td>{{ $pesanan->user_id }}</td>
                                <td> <a href="{{-- route('product.edit', $pesanan) --}}" class="btn btn-transparent btn-outline-warning shadow mb-3 text-white">Edit</a>
                                    <form action="{{-- route('product.destroy', $pesanan) --}}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Delete this Order?')" class="btn btn-transparent btn-outline-danger shadow mb-3 text-white">Delete</button>
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