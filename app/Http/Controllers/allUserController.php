<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\tbl_kodepos;
use Illuminate\Support\Facades\DB;
use App\Models\Pesanan;
use App\Models\Kategoris;


class allUserController extends Controller
{

   
    function profile(){
        $user = User::all()->where('id', Auth::user()->id)->first();
        $jualan = DB::table('produks')->where('user_id','=', Auth::user()->id)->get();

        return view('profile/profile',compact('user','jualan'));
    }

    public function showDetail($id)
    {
        // Mengambil data produk dari database berdasarkan ID
        $product = Produk::find($id);

        // Menampilkan halaman detail produk dan mengirimkan data produk
        return view('pembeli/detail', compact('product'));
    }

    function menungguBayar() {
        $user = User::all()->where('id', Auth::user()->id)->first();
        $pesanan = Pesanan::where('status','menunggu_pembayaran')->where('user_id',Auth::user()->id)->get();
        
        $harga = DB::table('produks')
            ->join('pesanans', 'produks.id', '=', 'pesanans.produk_id')
            ->where('status','=','menunggu')
            ->where('pesanans.user_id','=',Auth::user()->id)
            ->select('pesanans.*', 'produks.harga')
            ->get();

        return view('profile/menungguPembayaran')->with(compact('user','pesanan','harga'));
    }

    function sudahBayar() {
        $user = User::all()->where('id', Auth::user()->id)->first();
        $pesanan = Pesanan::where('status','sudah_dibayar')->where('user_id',Auth::user()->id)->get();
        
        $harga = DB::table('produks')
            ->join('pesanans', 'produks.id', '=', 'pesanans.produk_id')
            ->where('status','=','sudah_dibayar')
            ->where('pesanans.user_id','=',Auth::user()->id)
            ->select('pesanans.*', 'produks.harga')
            ->get();
        return view('profile/pesananDibayar',compact('user','pesanan','harga'));
    }

    function sudahDikirim() {
        $user = User::all()->where('id', Auth::user()->id)->first();
        $pesanan = Pesanan::where('status','sudah_dikirim')->where('user_id',Auth::user()->id)->get();
        
        $harga = DB::table('produks')
            ->join('pesanans', 'produks.id', '=', 'pesanans.produk_id')
            ->where('status','=','sudah_dikirim')
            ->where('pesanans.user_id','=',Auth::user()->id)
            ->select('pesanans.*', 'produks.harga')
            ->get();
        return view('profile/sudahDikirim',compact('user','pesanan','harga'));
    }

    function pesananDibatalkan() {
        $user = User::all()->where('id', Auth::user()->id)->first();
        $pesanan = Pesanan::where('status','cancel')->where('user_id',Auth::user()->id)->get();
        
        $harga = DB::table('produks')
            ->join('pesanans', 'produks.id', '=', 'pesanans.produk_id')
            ->where('status','=','cancel')
            ->where('pesanans.user_id','=',Auth::user()->id)
            ->select('pesanans.*', 'produks.harga')
            ->get();
      

        return view('profile/pesananDibatalkan',compact('user','pesanan','harga'));
    }
    function formPenjual(User $user)  {
        
        $provinsi = tbl_kodepos::pluck('provinsi')->toArray();
        $provinsi = array_unique($provinsi);
        
        $kabupaten = tbl_kodepos::pluck('kabupaten')->toArray();
        $kabupaten = array_unique($kabupaten);
        
        $kecamatan = tbl_kodepos::pluck('kecamatan')->toArray();
        $kecamatan = array_unique($kecamatan);
        
        $kelurahan = tbl_kodepos::pluck('kelurahan')->toArray();
        $kelurahan = array_unique($kelurahan);
        
        $kodepos = tbl_kodepos::pluck('kodepos')->toArray();
        $kodepos = array_unique($kodepos);
        return view('pembeli.formPenjual', compact('user','provinsi','kabupaten','kecamatan','kelurahan','kodepos'));
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
    public function index()
    {
        $products = Produk::all(); // Mengambil semua data produk dari tabel
    
        return view('pembeli/index', compact('products'));
    }

    // public function kategori()
    // {
    // $kategoris = Kategoris::all(); // Mengambil semua data kategori dari tabel

    // return view('pembeli.kategori', compact('kategoris'));
    // }

    public function kategori()
{
    $kategoris = Kategoris::all(); // Mengambil semua data kategori dari tabel

    return view('pembeli.kategori', compact('kategoris'));
}

public function showProductsByCategory($kategori)
{
    // Logika query untuk mengambil produk berdasarkan kategori
    $produk = Produk::where('kategori_id', $kategori)->get();

    return view('pembeli.kategori', compact('produk'));
}


    

    // function kategori(){
    //     return view('pembeli/kategori');
    // }
    // function detail(){
    //     return view('pembeli/detail');
    // }
    function checkout(){
        return view('pembeli/checkout');
    }
    function cart(){
        return view('pembeli/cart');
    }
    function kontak(){
        return view('pembeli/kontak');
    }

}
