<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

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
    return "Selamat Datang";
});


Route::prefix('category')-> group(function(){
    Route::get('/{title}', [ProductController::class, 'view']);
});

Route::get('/news',[NewsController::class,'index']);
Route::get('/news/{title}',[NewsController::class,'view']);

Route::prefix('program')-> group(function(){
    Route::get('/{title}', [ProgramController::class, 'view']);
});

Route::get('/about-us', [AboutUsController::class, 'view']);

Route::resource('/contact-us', ContactUsController::class) -> only([
    'index'
]);