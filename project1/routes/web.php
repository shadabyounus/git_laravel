<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController1;

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
    return view('master');
});
Route::get('home',[HomeController1::class,'home']);
Route::get('about',[HomeController1::class,'about']);
Route::get('product',[HomeController1::class,'product']);
