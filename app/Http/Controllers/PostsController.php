<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Category;
use App\Models\Menu;
use Nette\Utils\Paginator;

class PostsController extends Controller
{
    public function index()
    {
        $menu= new Menu;
        $menuList= $menu->tree();

        return view('home', [
            'title'=> 'Dinas Kesehatan Kota Semarang',
            'posts'=> Posts::where('category_id', '>', 0)->latest()->published()->paginate(6),
            'menulist'=> $menuList
        ]);
    }

    public function getAll()
    {
        $menu= new Menu;
        $menuList= $menu->tree();

        if(request('category')){
            Category::firstWhere('slug', request('category'));
        }

        return view('posts', [
            'title'=> 'Berita Terkini',
            'posts'=> Posts::where('category_id', '>', 0)->published()->latest()->filter(request(['search', 'category']))->paginate(15)->withQueryString(),
            'menulist'=> $menuList
        ]);
    }

    public function show(Posts $post)
    {
        $menu= new Menu;
        $menuList= $menu->tree();

        return view('post', [
            'title'=> "$post->title",
            'post'=> $post,
            'categories'=> Category::all(),
            'menulist'=> $menuList  
        ]);
    }

    public function menushow(Menu $menu)
    {
        $navMenu= new Menu;
        $menuList= $navMenu->tree();

        return view('menu.show', [
            'title'=> $menu->title,
            'post'=> Posts::firstWhere('menu_id', "$menu->id"),
            'categories'=> Category::all(),
            'menulist'=> $menuList
        ]);
    }
}
