<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
<<<<<<< HEAD
use App\Http\Controllers\DashboardController;

=======
use App\Http\Controllers\allUserController;
 
>>>>>>> 2e58e8c41ba64b68d41b80f1264a8434f37be466
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
<<<<<<< HEAD


Route::prefix('dashboard')->group(function(){

    Route::get('/',
        [DashboardController::class,'index'])-> name('dashboard');  


});

=======
route::get('profile',[allUserController::class,'profile'])->name('profile')->middleware('role');
route::get('user/profile',[allUserController::class,'profile'])->name('user.profile');

Route::get('/formPenjual/{user}', [allUserController::class, 'formPenjual'])->name('formPenjual');
Route::put('/UpdatePenjual/{user}', [allUserController::class, 'addPenjual'])->name('updateRole');
route::get('/index',
    [allUserController::class,'index']);
>>>>>>> 2e58e8c41ba64b68d41b80f1264a8434f37be466
