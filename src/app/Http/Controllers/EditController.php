<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Picture;
use Carbon\Carbon;

class EditController extends Controller
{
    public function top (Request $request) 
    {

        // ファイルタイトル
        $file_title = $request->input('file_title');

        // 備考
        $text_data = $request->input('text_data');

        // ファイル
        $files = $request->file('file');

        foreach($files as $file){

            // ファイル名取得
            $file_name = $file->getClientOriginalName();

            // データベースに保存
            \DB::table('pictures')->insert([
                // 'pictureID' => 1
                'pictureName' => $file_title
                ,'picturePass' => $file_name
                ,'StartDate' => Carbon::now()->toDateString()
                ,'EndDate' => Carbon::now()->toDateString()
            ]);

            // ファイル保存_Docker_Laravel/src/storage/app/public
            $file->storeAS('public/',$file_name);
        
        }

        $pictures = \DB::table('pictures')->get(); 
        
        return view('edit', compact('pictures'));

    }

}