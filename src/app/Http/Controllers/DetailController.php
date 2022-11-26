<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{

    public function itineraryList (Request $request) 
    {

        // しおり一覧取得
        $tolavel_itinerarys = \DB::table('tolavel_itinerarys')->get(); 

        return view('itinerary_list', compact('tolavel_itinerarys'));

    }

    public function itineraryDetail (Request $request) 
    {

        // view_flg: 0_detaillist 1_detailedit
        $view_flg = $request->view_flg;

        // 基本情報取得
        $tolavel_itinerary = \DB::table('tolavel_itinerarys')->where('itinerary_no', $request->itinerary_no)->first(); 

        if($view_flg == 0) {

            // 詳細情報取得(一覧)
            $tolavel_itinerary_details = \DB::table('tolavel_itinerary_details')->where('itinerary_no', $request->itinerary_no)->orderBy('itinerary_detail_start_at')->get(); 

        }elseif($view_flg == 1) {

            // 詳細情報取得(詳細)
            $tolavel_itinerary_details = \DB::table('tolavel_itinerary_details')->where('itinerary_detail_no', $request->itinerary_detail_no)->first(); 

        }

        return view('itinerary_detail', compact('view_flg','tolavel_itinerary','tolavel_itinerary_details'));

    }

}