<?php

namespace App\Http\Controllers;

use App\Models\Kategoris;
use App\Models\Produk;
use Illuminate\Http\Request;


class PenjualController extends Controller
{
    public function create()
    {
        $kategori = Kategoris::all();
        return view('profile.addProduk',compact('kategori'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'stok' => 'required',
            'min_stok' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required',
            'deskripsi_produk' => 'required',
            'kategori_id' => 'required',
            'user_id' => 'required',
        ]);

  
        $input = $request->all();
  
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'img_produk/';
            $profilegambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profilegambar);
            $input['gambar'] = "$profilegambar";
        }
    
        Produk::create($input);
        return view('profile.addProduk')->with('success','Produk created successfully.');
    }
     
    public function show(Produk $Produk)
    {
        return view('penjual.show',compact('Produk'));
    }
  
    public function edit(Produk $Produk)
    {
        return view('penjual.edit',compact('Produk'));
    }
    
  
    public function update(Request $request, Produk $Produk)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $Produk->update($input);
    
        return redirect()->route('Produks.index')
                        ->with('success','Produk updated successfully');
    }
  
    public function destroy(Produk $Produk)
    {
        $Produk->delete();
     
        return redirect()->route('Produks.index')
                        ->with('success','Produk deleted successfully');
    }
}
