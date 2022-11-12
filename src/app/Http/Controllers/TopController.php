<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Picture;

class EditController extends Controller
{
    public function top () 
    {

        $pictures = \DB::table('pictures')->get(); 

        return view('top', compact('pictures'));

    }

}