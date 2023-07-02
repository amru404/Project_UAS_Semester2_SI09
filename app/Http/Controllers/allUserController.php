<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class allUserController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
    
}
    
    function profile(){
        $user = User::all()->where('id', Auth::user()->id)->first();
        return view('pembeli/profile',compact('user'));
    }

    function formPenjual(User $user)  {
        return view('pembeli.formPenjual', compact('user'));
    }

    function addPenjual(Request $request, User $user){
        {
         
        
            $this->validate($request, [
                'name'     => 'required',
                'email'   => 'required',
                'no_hp'   => 'required',
                'tmp_lahir'   => 'required',
                'provinsi'   => 'required',
                'kabupaten'   => 'required',
                'kecamatan'   => 'required',
                'kelurahan'   => 'required',
                'kodepos'   => 'required',
                'detail_alamat'   => 'required',
                'role'   => 'required',
            ]);
        
            //get data Blog by ID
            $user = User::findOrFail($user->id);
            
            if($request->file('img_ktp') == "") {
        
                $user->update([
                    'name'     => $request->name,
                    'email'   => $request->email,
                    'no_hp'   => $request->no_hp,
                    'tmp_lahir'   => $request->tmp_lahir,
                    'provinsi'   => $request->provinsi,
                    'kabupaten'   => $request->kabupaten,
                    'kecamatan'   => $request->kecamatan,
                    'kelurahan'   => $request->kelurahan,
                    'kodepos'   => $request->kodepos,
                    'detail_alamat'   => $request->detail_alamat,
                    'role'   => $request->role,
                ]);
        
                // dd($user);
            } else {
        
                //hapus old image
                //upload new image
                $image = $request->file('img_ktp');
                $image->storeAs('public/img_ktp', $image->hashName());
        
                $user->update([
                    'name'     => $request->name,
                    'email'   => $request->email,
                    'no_hp'   => $request->no_hp,
                    'tmp_lahir'   => $request->tmp_lahir,
                    'provinsi'   => $request->provinsi,
                    'kabupaten'   => $request->kabupaten,
                    'kecamatan'   => $request->kecamatan,
                    'kelurahan'   => $request->kelurahan,
                    'kodepos'   => $request->kodepos,
                    'img_ktp'     => $image->hashName(),
                    'img_ktp_selfi'   => $request->img_ktp_selfi,
                    'detail_alamat'   => $request->detail_alamat,
                    'role'   => $request->role,
                ]);

                // dd($user);
        
            }
        
            if($user){
                //redirect dengan pesan sukses
                return redirect()->route('user.profile')->with(['success' => 'Data Berhasil Diupdate!']);
            }else{
                //redirect dengan pesan error
                return redirect()->route('user.profile')->with(['error' => 'Data Gagal Diupdate!']);
            }
        }
    }
    function index(){
        return view('pembeli/index');
    }
}
