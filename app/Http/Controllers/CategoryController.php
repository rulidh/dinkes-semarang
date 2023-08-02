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
            'visitors'=> [
                'real_time'=> Visitors::where('isOnline', true)->count(),
                'today'=> Visitors::whereDay('updated_at', now())->count(),
                'month'=> Visitors::whereMonth('updated_at', now()->month)->count()
                ]
        ]);
    }
}
