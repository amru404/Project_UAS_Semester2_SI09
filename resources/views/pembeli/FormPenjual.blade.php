<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Blog - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('updateRole', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')


                                <div class="form-group row">
                                    <label class="col-4 col-form-label" for="name">Nama</label> 
                                    <div class="col-8">
                                    <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label> 
                                    <div class="col-8">
                                    <input id="email" name="email" type="text" class="form-control" value="{{ old('email', $user->email) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_hp" class="col-4 col-form-label">No Hp</label> 
                                    <div class="col-8">
                                    <input id="no_hp" name="no_hp" type="number" class="form-control" value="{{ old('no_hp', $user->no_hp) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
                                    <div class="col-8">
                                    <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" value="{{ old('tmp_lahir', $user->tmp_lahir) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
                                    <div class="col-8">
                                    <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" value="{{ old('tgl_lahir', $user->tgl_lahir) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="provinsi" class="col-4 col-form-label">provinsi</label> 
                                    <div class="col-8">
                                    <select id="provinsi" name="provinsi" class="custom-select">
                                        <option value="rabbit">Rabbit</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kabupaten" class="col-4 col-form-label">kabupaten</label> 
                                    <div class="col-8">
                                    <select id="kabupaten" name="kabupaten" class="custom-select">
                                        <option value="rabbit">Rabbit</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kecamatan" class="col-4 col-form-label">kecamatan</label> 
                                    <div class="col-8">
                                    <select id="kecamatan" name="kecamatan" class="custom-select">
                                        <option value="rabbit">Rabbit</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kelurahan" class="col-4 col-form-label">kelurahan</label> 
                                    <div class="col-8">
                                    <select id="kelurahan" name="kelurahan" class="custom-select">
                                        <option value="rabbit">Rabbit</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kodepos" class="col-4 col-form-label">Kode Pos</label> 
                                    <div class="col-8">
                                    <select id="kodepos" name="kodepos" class="custom-select">
                                        <option value="16412">16412</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="detail_alamat" class="col-4 col-form-label">Detail Alamat</label> 
                                    <div class="col-8">
                                    <input id="detail_alamat" name="detail_alamat" type="text" class="form-control" value="{{ old('detail_alamat', $user->detail_alamat) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="img_ktp" class="col-4 col-form-label">Foto KTP</label> 
                                    <div class="col-8">
                                    <input id="img_ktp" name="img_ktp" type="file" class="form-control" value="{{ old('img_ktp', $user->img_ktp) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="img_ktp_selfi" class="col-4 col-form-label">Foto Selfi KTP</label> 
                                    <div class="col-8">
                                    <input id="img_ktp_selfi" name="img_ktp_selfi" type="text" class="form-control" value="{{ old('img_ktp_selfi', $user->img_ktp_selfi) }}">
                                    </div>
                                    
                                </div>
                                <input type="hidden" name="role" value="penjual"> 
                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>