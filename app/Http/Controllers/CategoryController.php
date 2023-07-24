<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
            'menulist'=> $menuList
        ]);
    }
}
