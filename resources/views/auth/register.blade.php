@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        
                        <input type="hidden" name="nik" value="0">

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                         <div class="row mb-3">
                            <label for="no_hp" class="col-md-4 col-form-label text-md-end">{{ __('No HP') }}</label>

                            <div class="col-md-6">
                                <input id="no_hp" type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp">

                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tmp_lahir" class="col-md-4 col-form-label text-md-end">{{ __('tempat_lahir')
                                }}</label>

                            <div class="col-md-6">
                                <input id="tmp_lahir" type="text"
                                    class="form-control @error('ntmp_lahir') is-invalid @enderror" name="tmp_lahir"
                                    value="{{ old('tmp_lahir') }}" required autocomplete="tmp_lahir" autofocus>

                                @error('tmp_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="tgl_lahir" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Lahir')
                                }}</label>

                            <div class="col-md-6">
                                <input id="tgl_lahir" type="date"
                                    class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir"
                                    value="{{ old('tgl_lahir') }}" required autocomplete="tgl_lahir" autofocus>

                                @error('tgl_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <input type="hidden" name="provinsi" value="-">
                        <input type="hidden" name="kabupaten" value="-">
                        <input type="hidden" name="kecamatan" value="-">
                        <input type="hidden" name="kelurahan" value="-">
                        <input type="hidden" name="kodepos" value="0">
                        <input type="hidden" name="img_ktp" value="-">
                        <input type="hidden" name="img_ktp_selfi" value="-">
                        <input type="hidden" name="detail_alamat" value="-">
                        <input type="hidden" name="role" value="pembeli">
                        <input type="hidden" name="status" value="-">



                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm
                                Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection