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

Route::get('/blog', [PostController::class,'index'])->name('blog.index');
Route::post('/blog/post', [PostController::class,'store'])->name('blog.store');
Route::delete('/blog/post/{id}', [PostController::class,'destroy'])->name('blog.delete'); // Route::delete('/blog/post/{id?}', [PostController::class,'destroy'])->name('blog.delete');
//Route::resource('/blog', PostController::class);

/*
Route::get('/', function () {
    return redirect()->route('blog.index');
});*/