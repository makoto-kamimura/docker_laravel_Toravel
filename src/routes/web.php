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
    $tolavel_itinerarys = \DB::table('tolavel_itinerarys')->get(); 

    return view('itinerary_list', compact('tolavel_itinerarys'));
}) -> name('itinerary_list');

Route::get('itinerary_detail', [DetailController::class,'top']) -> name('itinerary_detail');

Route::post('/itinerary_create', [EditController::class,'itineraryCreate']);
Route::post('/itinerary_edit', [EditController::class,'itineraryEdit']);