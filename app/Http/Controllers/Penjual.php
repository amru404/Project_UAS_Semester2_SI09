<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class Penjual extends Controller
{
    public function create()
    {
        return view('Produks.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Produk::create($input);
        return view('ddxszpenjual.addProduk')->with('success','Produk created successfully.');
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
