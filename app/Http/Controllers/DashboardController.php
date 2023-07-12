<?php

namespace App\Http\Controllers;

use App\Models\Kategoris;
use App\Models\Produk;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {   $kategoris = Kategoris::all();
        return view('dashboards/category/index', compact('kategoris'));
    }

    public function create(){
        return view('dashboards/category/add');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',

        ]);
        Kategoris::create($request->only('name'));
        return redirect()->route('category')->with('Success', "Created Successfully");
    }

    public function edit(Kategoris $item){
        return view ('dashboards/Category/edit' ,compact('item'));
    }

    public function delete(Kategoris $item){
        $item->delete();
        return redirect()->route('category')->with('Succes','Delete Successfully');
    }

    public function update(Request $request, $id)
{
    $kategoris = Kategoris::find($id);
    $kategoris->name = $request->input('name');
    date_default_timezone_set('Asia/Jakarta');
//if (empty ($request -> input('created_at')))
    $kategoris->updated_at = Carbon::now();
    $kategoris->save();
    $kategoris->update();
    
        return redirect()->route('category')->with('success', 'Kategori berhasil diupdate.');
    }

    public function product(){
        $produk=Produk::all();
        return view('/dashboards/Product/index',compact('produk'));
    }
    
    public function addproduct(){
        $kategoris= Kategoris::all();
        // dd('$kategoris');
        return view('dashboards/product/add', compact('kategoris'));
    }
}

