<?php

namespace App\Http\Controllers;

use App\Models\Kategoris;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {   $kategoris =Kategoris::all();
        return view('dashboards/category/index', compact('kategoris'));
    }

    
}
