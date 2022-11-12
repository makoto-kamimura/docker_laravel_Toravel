<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Station;
use App\Models\Picture;

class DetailController extends Controller
{

    public function top (Request $request) 
    {

        $picture = \DB::table('pictures')->where('ID', $request->ID)->first(); 

        // return view('detail');
        return view('detail', compact('picture'));

    }

}