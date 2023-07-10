<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\allUserController;
 
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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/Adminhome', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('role');
Route::get('/home', [HomeController::class, 'index'])->name('home');
route::get('daerah',[adminController::class,'cekkota'])->name('daerah');
route::get('profile',[ProfileController::class,'index'])->name('profile');



Route::prefix('dashboard')->group(function(){

    Route::get('/category',
        [DashboardController::class,'index'])-> name('category'); 
        
    Route::get('/category/add',
        [DashboardController::class,'create'])->name('addCategory');
    
    Route::post('/category',
        [DashboardController::class,"store"])->name('category.store');
    Route::get('/category/{item}/edit',
        [DashboardController::class,'edit'])->name('category.edit');
    Route::put('category/{item}',
        [DashboardController::class,'update'])->name('category.update');
    Route::delete('category/{item}',
        [DashboardController::class,'delete'])->name('category.destroy');

});

route::get('profile',[allUserController::class,'profile'])->name('profile')->middleware('role');
route::get('user/profile',[allUserController::class,'profile'])->name('user.profile');

Route::get('/formPenjual/{user}', [allUserController::class, 'formPenjual'])->name('formPenjual');
Route::put('/UpdatePenjual/{user}', [allUserController::class, 'addPenjual'])->name('updateRole');



route::get('/index',[allUserController::class,'index']);

route::get('/index',
    [allUserController::class,'index']);

route::get('/index',[allUserController::class,'index']);
route::get('/kategori',[allUserController::class,'kategori'])->name('kategori');
route::get('/pembeli',[allUserController::class,'index']);
route::get('/detail',[allUserController::class,'detail'])->name('detail');
route::get('/checkout',[allUserController::class,'checkout'])->name('checkout');
route::get('/cart',[allUserController::class,'cart'])->name('cart');


route::get('/index', [allUserController::class,'index']);
route::get('/kategori',[allUserController::class,'kategori'])->name('kategori');
route::get('/index',[allUserController::class,'index']);
route::get('/index',[allUserController::class,'index']);
