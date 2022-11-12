<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditController;
use App\Http\Controllers\DetailController;

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
    $pictures = \DB::table('pictures')->get(); 

    return view('layout', compact('pictures'));
    // return view('welcome');
});

// Route::post('/edit', function () {
//     return view('edit');
// });

Route::get('detail', [DetailController::class,'top']) -> name('detail');
// Route::get('detail/{pictureID}', 'DetailController@index') -> name('detail');

Route::post('/detail', [DetailController::class,'top']);

Route::post('/edit', [EditController::class,'top']);
