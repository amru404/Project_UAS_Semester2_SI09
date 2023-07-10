<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pesanan;

class ProfileController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
        
    }

    function index(){

        $produkJualan = Produk::all()->where('user_id', Auth::user()->id );

        foreach ($produkJualan as $key => $data) {
            
            // dd($terjual);
    
            return view('pembeli/profile',compact('produkJualan','terjual'));
        }

    }
}
