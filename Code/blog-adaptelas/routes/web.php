<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get(uri:'/blog',[PostController::class,'index'])->name(name:'blog.index');
Route::post(uri:'/blog/post',[PostController::class,'store'])->name(name:'blog-store');
Route::delete(uri:'/blog/post/{id}',[PostController::class,'destriy'])->name(name:'blog-delete');
