@extends('template/dashboard/index')
@section('content')
<div class="col">
    <div class="card">
       <div class="card-body">
       <div class="card-title">Edit Category-Product</div>
       <hr>
        <form action="{{ route('category.update', $item->id) }}" method="POST">
            @csrf
            @method('put')
       <div class="form-group">
        <label for="input-6">Name</label>
        <input type="text" class="form-control form-control-rounded" id="name" value="{{ $item->name }}" name="name">
       </div>
       {{-- <div class="form-group py-2">
         <div class="icheck-material-white">
        <input type="checkbox" id="user-checkbox2" checked=""/>
        <label for="user-checkbox2">I Agree Terms & Conditions</label>
        </div>
       </div> --}}
       <div class="form-group">
        <button type="submit" class="btn btn-light btn-round ">Edit</button>
      </div>
      </form>
     </div>
     </div>
  </div>

  @endsection