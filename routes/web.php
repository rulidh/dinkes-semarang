<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::get('/', [PostsController::class, 'index']);
Route::get('posts/', [PostsController::class, 'getAll']);
Route::get('post/{post:slug}', [PostsController::class, 'show']);

Route::get('profile/', function(){
    return view('profile', [
        'title'=> 'Profile Kesehatan'
    ]);
});

Route::get('admin/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('admin/', [LoginController::class, 'authenticate']);
Route::post('logout/', [LoginController::class, 'logout']);

Route::get('dashboard/', function(){
    return view('dashboard.index');
})->middleware('auth');
