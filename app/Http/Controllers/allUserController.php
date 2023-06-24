<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class allUserController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
    
}
    //
    function profile(){
        return view('pembeli/profile');
    }
}
