<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardMenuController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardPageController;
use App\Http\Controllers\DashboardSubMenuController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PostsController;
use App\Models\Menu;
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
Route::get('categories', [CategoryController::class, 'index']);

Route::get('profile/', function(){
    $navMenu= new Menu;
    $menuList= $navMenu->tree();

    return view('profile', [
        'title'=> 'Profile Kesehatan',
        'menulist'=> $menuList
    ]);
});

Route::middleware('throttle:6,1')->group(function() {
    Route::get('admin', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('admin', [LoginController::class, 'authenticate']);
    Route::post('logout', [LoginController::class, 'logout']);
});

Route::get('dashboard', function(){
    return view('dashboard.index', [
        'title'=> 'Admin Dashboard'
    ]);
})->middleware('auth');

Route::get('dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::post('dashboard/posts/{post:slug}/publish', [DashboardPostController::class, 'publish'])->middleware('auth');
Route::post('dashboard/posts/{post:slug}/unpublish', [DashboardPostController::class, 'unpublish'])->middleware('auth');

Route::get('dashboard/categories/checkSlug', [DashboardCategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('dashboard/categories', DashboardCategoryController::class)->except('show')->middleware('auth');

Route::get('menu/{menu:slug}', [PostsController::class, 'menushow']);

Route::get('dashboard/menu/checkSlug', [DashboardMenuController::class, 'checkSlug'])->middleware('auth');
Route::resource('dashboard/menu', DashboardMenuController::class)->except('show')->middleware('auth');

Route::post('dashboard/posts/create/image_upload', [EditorController::class, 'upload'])->name('upload');