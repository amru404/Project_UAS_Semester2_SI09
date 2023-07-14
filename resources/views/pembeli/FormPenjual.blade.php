@extends('profile/indexProfile')

@section('breadcrumb')
Permohonan Menjadi Penjual
@endsection

@section('content')

<div class="col-lg-8">
    <div class="card mb-4">
      <div class="card-body">
        <h5>Tambah Produk</h5><br>
        <form action="{{ route('updateRole', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')


            <div class="form-group row">
                    
                    <label style="color: white" class="col-4 col-form-label" for="nik">NIK</label> 
                    <div class="col-8">
                    <input id="nik" name="nik" type="text" class="form-control" value="{{ old('nik', $user->nik) }}">
                    </div>
                </div>

                <div class="form-group row">
                    
                    <label style="color: white" class="col-4 col-form-label" for="name">Nama</label> 
                    <div class="col-8">
                    <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label style="color: white" for="email" class="col-4 col-form-label">Email</label> 
                    <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control" value="{{ old('email', $user->email) }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label style="color: white" for="no_hp" class="col-4 col-form-label">No Hp</label> 
                    <div class="col-8">
                    <input id="no_hp" name="no_hp" type="number" class="form-control" value="{{ old('no_hp', $user->no_hp) }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label style="color: white" for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
                    <div class="col-8">
                    <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" value="{{ old('tmp_lahir', $user->tmp_lahir) }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label style="color: white" for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
                    <div class="col-8">
                    <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" value="{{ old('tgl_lahir', $user->tgl_lahir) }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label style="color: white" for="provinsi" class="col-4 col-form-label">provinsi</label> 
                    <div class="col-8">
                    <select id="provinsi" name="provinsi" class="custom-select">
                        @foreach ($provinsi as $provinsi)
                            <option value="{{ $provinsi }}">{{ $provinsi }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label style="color: white" for="kabupaten" class="col-4 col-form-label">kabupaten</label> 
                    <div class="col-8">
                    <select id="kabupaten" name="kabupaten" class="custom-select">
                        @foreach ($kabupaten as $kabupaten)
                             <option value="{{ $kabupaten }}">{{ $kabupaten }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label style="color: white" for="kecamatan" class="col-4 col-form-label">kecamatan</label> 
                    <div class="col-8">
                    <select id="kecamatan" name="kecamatan" class="custom-select">
                        @foreach ($kecamatan as $kecamatan)
                        <option value="{{ $kecamatan }}"  {{ (isset($kecamatan) || old('kecamatan'))? "selected":"" }}>{{ $kecamatan }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label style="color: white" for="kelurahan" class="col-4 col-form-label">kelurahan</label> 
                    <div class="col-8">
                    <select id="kelurahan" name="kelurahan" class="custom-select">
                        @foreach ($kelurahan as $kelurahan)
                             <option value="{{ $kelurahan }}">{{ $kelurahan }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label style="color: white" for="kodepos" class="col-4 col-form-label">kodepos</label> 
                    <div class="col-8">
                    <select id="kodepos" name="kodepos" class="custom-select">
                        @foreach ($kodepos as $kodepos)
                             <option value="{{ $kodepos }}">{{ $kodepos }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
              
                <div class="form-group row">
                    <label style="color: white" for="detail_alamat" class="col-4 col-form-label">Detail Alamat</label> 
                    <div class="col-8">
                    <input id="detail_alamat" name="detail_alamat" type="text" class="form-control" value="{{ old('detail_alamat', $user->detail_alamat) }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label style="color: white" for="img_ktp" class="col-4 col-form-label">Foto KTP</label> 
                    <div class="col-8">
                    <input id="img_ktp" name="img_ktp" type="file" class="form-control" value="{{ old('img_ktp', $user->img_ktp) }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label style="color: white" for="img_ktp_selfi" class="col-4 col-form-label">Foto Selfi KTP</label> 
                    <div class="col-8">
                    <input id="img_ktp_selfi" name="img_ktp_selfi" type="file" class="form-control" value="{{ old('img_ktp_selfi', $user->img_ktp_selfi) }}">
                    </div>
                </div>

                <input type="hidden" name="status" value="proses">
                <input type="hidden" name="role" value="pembeli"> 
            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>

        </form> 
        </div>
      </div>
    </div>

@endsection