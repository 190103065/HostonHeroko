<?php
use App\Http\Controllers\GarageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('garages',[GarageController::class,'index']);
Route::post('garage',[GarageController::class,'store']);
Route::get('garages/{id}',[GarageController::class,'show']);
Route::put('garage/{id}',[GarageController::class,'update']);
Route::delete('garage/{id}',[GarageController::class,'destroy']);
