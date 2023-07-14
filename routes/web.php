<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\allUserController;
use App\Http\Controllers\PenjualController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
route::get('/',[allUserController::class,'index']);


// Route::get('/', function () {
//     return view('pembeli/index');
// });


Auth::routes();
Route::get('/Adminhome', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('role');
Route::get('/home', [HomeController::class, 'index'])->name('home');
route::get('daerah',[adminController::class,'cekkota'])->name('daerah');



Route::prefix('dashboard')->group(function(){

    Route::get('/',
        [DashboardController::class,'index'])-> name('category'); 
        
    Route::get('/category/add',
        [DashboardController::class,'create'])->name('addCategory');
    
    Route::post('/category',
        [DashboardController::class,"store"])->name('category.store');
    Route::get('/category/{item}/edit',
        [DashboardController::class,'edit'])->name('category.edit');
    Route::put('/category/{item}',
        [DashboardController::class,'update'])->name('category.update');
    Route::delete('/category/{item}',
        [DashboardController::class,'delete'])->name('category.destroy');
    Route::get('/product',
        [DashboardController::class,'product'])->name('product');
    Route::get('/product/add',
        [DashboardController::class,'addproduct']) ->name("product.add");
    Route::post('/product',
        [DashboardController::class,'storeProduct'])->name('product.store');  
    Route::get('product/{produk}/edit',
        [DashboardController::class,"editProduct"])->name('product.edit');
    Route::put('/product/{produk}',
        [DashboardController::class,'updateProduct'])->name('product.update');
    Route::delete('/product/{produk}',
        [DashboardController::class,'deleteProduct'])->name('product.destroy');
    Route::get('/order',
        [DashboardController::class,'order'])->name('orders');  
        
});

    Route::prefix('profile')->group(function(){
        route::get('/',[allUserController::class,'profile'])->name('user.profile');
        route::get('/menungguBayar',[allUserController::class,'menungguBayar'])->name('user.menungguBayar');
        route::get('/sudahBayar',[allUserController::class,'sudahBayar'])->name('user.sudahBayar');
        route::get('/sudahDikirim',[allUserController::class,'sudahDikirim'])->name('user.sudahDikrim');
        route::get('/pesananDibatalkan',[allUserController::class,'pesananDibatalkan'])->name('user.pesananDibatalkan');
        
        Route::get('/formPenjual/{user}', [allUserController::class, 'formPenjual'])->name('formPenjual');
        Route::put('/UpdatePenjual/{user}', [allUserController::class, 'addPenjual'])->name('updateRole');

        Route::get('/addProduk}', [PenjualController::class, 'create'])->name('profile.create.produk');
        Route::post('/storeProduk}', [PenjualController::class, 'store'])->name('profile.store.produk');


    });

    Route::middleware(['auth'])->group(function () {
        route::get('/checkout',[allUserController::class,'checkout'])->name('checkout');
        route::get('/cart',[allUserController::class,'cart'])->name('cart');
    });







route::get('/index',[allUserController::class,'index']);

route::get('/kategori',[allUserController::class,'kategori'])->name('kategori');
route::get('/pembeli',[allUserController::class,'index'])->name('index');
Route::get('/detail/{id}', [allUserController::class, 'showDetail'])->name('detail');



route::get('/kategori',[allUserController::class,'kategori'])->name('kategori');

route::get('/kontak',[allUserController::class,'kontak'])->name('kontak');

route::get('/kategori',[allUserController::class,'kategori'])->name('kategori');
route::get('/kontak',[allUserController::class,'kontak'])->name('kontak');
