<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EditController extends Controller
{

    public function itineraryCreate (Request $request) 
    {

        // しおりタイトル
        $itinerary_title = $request->input('itinerary_title');

        // しおり画像
        $itinerary_picture = $request->file('itinerary_picture');

            // ファイル名取得
            $itinerary_picture_name = $itinerary_picture->getClientOriginalName();

            // データベースに保存
            \DB::table('tolavel_itinerarys')->insert([
                // 'itinerary_no' => 1
                // 'itinerary_category_no' => ''
                // ,'itinerary_tag_no' => ''
                'itinerary_title' => $itinerary_title
                ,'itinerary_picture' => $itinerary_picture_name
            ]);

            // ファイル保存_Docker_Laravel/src/storage/app/public
            $itinerary_picture->storeAS('public/',$itinerary_picture_name);
        
        return redirect('/');  

    }

    public function itineraryEdit (Request $request) 
    {
        
        // しおりNo
        $itinerary_no = $request->input('itinerary_no');

        // 開始日時
        $itinerary_detail_start_at = $request->input('itinerary_detail_start_at');

        // 開始日時
        $itinerary_detail_end_at = $request->input('itinerary_detail_end_at');

        // 詳細カテゴリ
        $itinerary_detail_category_no = $request->input('itinerary_detail_category_no');

        // 詳細タイトル
        $itinerary_detail_title = $request->input('itinerary_detail_title');

        // 詳細備考
        $itinerary_detail_notes = $request->input('itinerary_detail_notes');

        // 詳細コスト
        $itinerary_detail_cost = $request->input('itinerary_detail_cost');

        // 詳細画像
        $itinerary_detail_picture = $request->file('itinerary_detail_picture');

            // ファイル名取得
            $itinerary_detail_picture_name = $itinerary_detail_picture->getClientOriginalName();

            // データベースに保存
            \DB::table('tolavel_itinerary_details')->insert([
                // 'itinerary_detail_no' => 1
                'itinerary_no' => $itinerary_no
                ,'itinerary_detail_category_no' => $itinerary_detail_category_no
                ,'itinerary_detail_title' => $itinerary_detail_title
                ,'itinerary_detail_picture' => $itinerary_detail_picture_name
                ,'itinerary_detail_start_at' => $itinerary_detail_start_at
                ,'itinerary_detail_end_at' => $itinerary_detail_end_at
                ,'itinerary_detail_cost' => $itinerary_detail_cost
                ,'itinerary_detail_notes' => $itinerary_detail_notes
            ]);

            // ファイル保存_Docker_Laravel/src/storage/app/public
            $itinerary_detail_picture->storeAS('public/',$itinerary_detail_picture_name);
        
        return redirect()->route('itinerary_detail', ['itinerary_no'=>$itinerary_no]);

    }

    // public function itineraryDetailEdit (Request $request) 
    // {
        
    //     // しおりNo
    //     $itinerary_no = $request->input('itinerary_no');

    //     // 開始日時
    //     $itinerary_detail_start_at = $request->input('itinerary_detail_start_at');

    //     // 開始日時
    //     $itinerary_detail_end_at = $request->input('itinerary_detail_end_at');

    //     // 詳細カテゴリ
    //     $itinerary_detail_category_no = $request->input('itinerary_detail_category_no');

    //     // 詳細タイトル
    //     $itinerary_detail_title = $request->input('itinerary_detail_title');

    //     // 詳細備考
    //     $itinerary_detail_notes = $request->input('itinerary_detail_notes');

    //     // 詳細コスト
    //     $itinerary_detail_cost = $request->input('itinerary_detail_cost');

    //     // 詳細画像
    //     $itinerary_detail_picture = $request->file('itinerary_detail_picture');

    //         // ファイル名取得
    //         $itinerary_detail_picture_name = $itinerary_detail_picture->getClientOriginalName();

    //         // データベースに保存
    //         \DB::table('tolavel_itinerary_details')->insert([
    //             // 'itinerary_detail_no' => 1
    //             'itinerary_no' => $itinerary_no
    //             ,'itinerary_detail_category_no' => $itinerary_detail_category_no
    //             ,'itinerary_detail_title' => $itinerary_detail_title
    //             ,'itinerary_detail_picture' => $itinerary_detail_picture_name
    //             ,'itinerary_detail_start_at' => $itinerary_detail_start_at
    //             ,'itinerary_detail_end_at' => $itinerary_detail_end_at
    //             ,'itinerary_detail_cost' => $itinerary_detail_cost
    //             ,'itinerary_detail_notes' => $itinerary_detail_notes
    //         ]);

    //         // ファイル保存_Docker_Laravel/src/storage/app/public
    //         $itinerary_detail_picture->storeAS('public/',$itinerary_detail_picture_name);
        
    //     return redirect()->route('itinerary_detail', ['itinerary_no'=>$itinerary_no]);

    // }

}