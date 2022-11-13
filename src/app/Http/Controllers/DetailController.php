<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{

    public function top (Request $request) 
    {

        // 基本情報取得
        $tolavel_itinerary = \DB::table('tolavel_itinerarys')->where('itinerary_no', $request->itinerary_no)->first(); 

        // 詳細情報取得
        $tolavel_itinerary_details = \DB::table('tolavel_itinerary_details')->where('itinerary_no', $request->itinerary_no)->get(); 

        return view('itinerary_detail', compact('tolavel_itinerary','tolavel_itinerary_details'));

    }

}