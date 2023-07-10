<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'no_hp' => ['required', 'integer', 'max:255'],
            'tmp_lahir' => ['required', 'string', 'max:255'],
            'tgl_lahir' => ['required', 'date', 'max:255'],
            'provinsi' => ['required', 'string', 'max:255'],
            'kabupaten' => ['required', 'string', 'max:255'],
            'kecamatan' => ['required', 'string', 'max:255'],
            'kelurahan' => ['required', 'string', 'max:255'],
            'kodepos' => ['required', 'integer', 'max:255'],
            'img_ktp' => ['required', 'string', 'max:255'],
            'img_ktp_selfi' => ['required', 'string', 'max:255'],
            'detail_alamat' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'no_hp' => $data['kodepos'],
            'tmp_lahir' => $data['tmp_lahir'],
            'tgl_lahir' => $data['tgl_lahir'],
            'provinsi' => $data['provinsi'],
            'kabupaten' => $data['kabupaten'],
            'kecamatan' => $data['kecamatan'],
            'kelurahan' => $data['kelurahan'],
            'kodepos' => $data['kodepos'],
            'img_ktp' => $data['img_ktp'],
            'img_ktp_selfi' => $data['img_ktp_selfi'],
            'detail_alamat' => $data['detail_alamat'],
            'role' => $data['role'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
