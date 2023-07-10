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
                'nik'     => 'required',
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
                'status'   => 'required',
            ]);
        
            //get data Blog by ID
            $user = User::findOrFail($user->id);
            
            if($request->file('img_ktp') == "") {
        
                $user->update([
                    'nik'     => $request->nik,
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
                    'status'     => $request->status,

                ]);
        
                // dd($user);
            } else {
        
                //hapus old image
                //upload new image
                $img_ktp = $request->file('img_ktp');
                $destinationPath = 'img_ktp';
                $profileimg_ktp = date('YmdHis') . "." . $img_ktp->getClientOriginalExtension();
                $img_ktp->move($destinationPath, $profileimg_ktp);
                $ktp = $profileimg_ktp;

                $img_ktp_selfi = $request->file('img_ktp_selfi');
                $destinationPath = 'img_ktp_selfi';
                $profileimg_ktp_selfi = date('YmdHis') . "." . $img_ktp_selfi->getClientOriginalExtension();
                $img_ktp_selfi->move($destinationPath, $profileimg_ktp_selfi);
                $ktp_selfi = $profileimg_ktp_selfi;
        
                $user->update([
                    'nik'     => $request->nik,
                    'name'     => $request->name,
                    'email'   => $request->email,
                    'no_hp'   => $request->no_hp,
                    'tmp_lahir'   => $request->tmp_lahir,
                    'provinsi'   => $request->provinsi,
                    'kabupaten'   => $request->kabupaten,
                    'kecamatan'   => $request->kecamatan,
                    'kelurahan'   => $request->kelurahan,
                    'kodepos'   => $request->kodepos,
                    'img_ktp'     => $ktp,
                    'img_ktp_selfi'   => $ktp_selfi,
                    'detail_alamat'   => $request->detail_alamat,
                    'role'   => $request->role,
                    'status'     => $request->status,

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

    function kategori(){
        return view('pembeli/kategori');
    }


}
