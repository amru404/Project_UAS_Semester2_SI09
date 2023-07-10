<?php

namespace App\Http\Controllers;

use App\Models\Kategoris;
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

    
    public function update(Request $request, Kategoris $item){
       // dd($item);
        $request->validate([
            'name' => 'required',
         

        ]);
        $item->update(['name'=> $request->name]);

        return redirect()->route('category')->with('success', 'Product updated Successfully');
    }

}

