<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadFileController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\MailController;
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
    return view('welcome');
});

Route::get('profile/{lang}', function ($lang){
	App::setlocale($lang);
    return view('profile');
});
Route::get('profile', function () {
    return view('profile');
});
Route::view('upload','profile');
Route::POST('upload',[UploadFileController::class,'index']);


Route::get('send-email', [SendEmailController::class,'index']);
Route::get('/multiuploads', [UploadController::class,'uploadForm']);
Route::post('/multiuploads', [UploadController::class,'uploadSubmit']);

Route::get('/upload', [FileController::class, 'index']);

Route::post('/upload', [FileController::class, 'uploadMultipleFiles'])->name('upload.store');


Route::get('/', [ProductsController::class,'index']);
Route::get('cart', [ProductsController::class,'cart']);
Route::get('add-to-cart/{id}', [ProductsController::class,'addToCart']);

Route::get('mail/send', [MailController::class,'send']);