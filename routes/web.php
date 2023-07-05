<?php

use App\Http\Controllers\PostsController;
use App\Models\Posts;
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

Route::get('/', [PostsController::class, 'index']);
Route::get('posts/', [PostsController::class, 'getAll']);
Route::get('post/{post:slug}', [PostsController::class, 'show']);

Route::get('profile/', function(){
    return view('profile', [
        'title'=> 'Profile Kesehatan'
    ]);
});
