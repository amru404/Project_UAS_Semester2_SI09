<?php

namespace App\Http\Controllers;

use App\Models\Kategoris;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\User;

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

    public function product()
    {
        $produk = Produk::all();
        $kategoris = Kategoris::pluck('name', 'id');
        return view('/dashboards/Product/index', compact('produk', 'kategoris'));
    }
    
    public function addproduct(){
        $kategoris= Kategoris::all();
        // dd('$kategoris');
        return view('dashboards/product/add', compact('kategoris'));
    }


    public function storeProduct(Request $request){
        $request->validate([
            'kode'=>'required',
            'nama'=>'required',
            'harga'=>'required',
            'stok'=>'required',
            'min_stok'=>'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi_produk'=>"nullable",
            'kategori_id'=>'required|exists:kategoris,id',
        ]);
        
        $input = $request->all();
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'img_produk/';
            $profilegambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profilegambar);
            $input['gambar'] = "$profilegambar";
        }
        
        Produk::addProduct($input);
        return redirect()->route('product')->with('Success', "Created Successfully");
    }

    public function editProduct(Produk $produk, Kategoris $kategoris){
        $kategoris= Kategoris::all();
        return view('dashboards/Product/edit', compact('produk','kategoris'));
    }

    public function updateProduct(Request $request, Produk $produk, Kategoris $kategoris)
    {   
        $kategoris= Kategoris::all(); 
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'min_stok' => 'required',
            'deskripsi_produk' => 'required',
            'kategori_id' => 'required|exists:kategoris,id',
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
          
        $produk->updateProduct($input);
    
        compact('kategoris');
        return redirect()->route('product')->with('success', 'Product berhasil diupdate.');
        }
    public function deleteProduct( Produk $produk){
        $produk->delete();
        return redirect()->route('product')->with('Success',' Delete Succesfully');
    }
    public function order(){
        $order = Pesanan::all();
        $produk = Produk::pluck('nama', 'id');
        $user = User::pluck('name', 'id');
        return view('dashboards/Order/index',compact('order', 'produk', 'user'));
    }

    public function addOrder(){
        $item = Produk::all();
        $person = User::all();
        return view('dashboards/Order/add',compact('item', 'person'));
    }
    
    public function storeOrder(Request $request){
        $request->validate([
            'kode'=> 'required',
            'qty' => 'required',
            'wktu_pesan'=> 'required',
            'status'=>'required',
            'produk_id' => 'required|exists:produks,id',
            'user_id' => 'required|exists:users,id'
        ]);

        $input = $request->all();
        Pesanan::addOrder($input);
        return redirect()->route('order')->with('Success', "Created Successfully");
    }

    public function updateOrder(Request $request, Pesanan $pesanan, User $user, Produk $produk){
        $user = User::pluck('name','id');
        $produk=Produk::pluck('nama','id');
        $request->validate([
            'kode'=> ['required'],
            'qty' =>['required'],
            'wktu_pesan'=> ['required'],
            'status'=> ['required'],
            'produk_id' => 'required|exists:produks,id',
            'user_id' => 'required|exists:users,id',
        ]);
        
        $input = $request->all();
        $pesanan->orderProduct($input);
        compact('user','produk');
        return redirect()->route('order')->with('success', 'Order Update Successfully');
    }

    public function editOrder(Pesanan $pesanan, Produk $produk, User $user){
        $user = User::pluck('name','id');
        $produk=Produk::pluck('nama','id');
        return view('dashboards/order/edit', compact('produk','kategoris'));
    }
    
    
}