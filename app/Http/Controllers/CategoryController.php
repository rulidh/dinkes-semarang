<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Visitors;
use Illuminate\Http\Request;
use App\Models\Menu;

class CategoryController extends Controller
{
    public function index()
    {
        $menu= new Menu;
        $menuList= $menu->tree();

        return view('categories', [
            'title'=> 'Semua Kategori',
            'categories'=> Category::all(),
            'menulist'=> $menuList,
            'realtime_visitor'=> Visitors::where('isOnline', true)->count()
        ]);
    }
}
