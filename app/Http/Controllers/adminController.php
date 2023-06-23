<?php

namespace App\Http\Controllers;

use App\Models\tbl_kodepos;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //

    function cekkota(){
        $provinsiNames = tbl_kodepos::pluck('provinsi')->toArray();
        $uniqueCityNames = array_unique($provinsiNames);

        $kotaName = tbl_kodepos::pluck('kabupaten')->toArray();
        $kota = array_unique($kotaName);
        // dd($kota);
                // $test = $uniqueCityNames[1];
        // echo ($uniqueCityNames);
        // foreach ($uniqueCityNames as $cityName) {
        //     // Lakukan operasi lain di sini
        //     echo $cityName;u
        // }

        return view('test',compact('uniqueCityNames','kota'));
    }
}
