<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Visitors;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class PostsController extends Controller
{
    public function index()
    {
        $menu= new Menu;
        $menuList= $menu->tree();
        request()->session()->put('ip_address', $_SERVER['REMOTE_ADDR']);
        $get_ip= request()->session()->get('ip_address');

        if(Visitors::firstWhere('ip', $get_ip) === null) {
            Visitors::create([
                'ip'=> $get_ip,
                'isOnline'=> true
            ]);
        }else{
            Visitors::where('ip', $get_ip)->update(['isOnline'=> true]);
        }

        return view('home', [
            'title'=> 'Dinas Kesehatan Kota Semarang',
            'posts'=> Posts::where('category_id', '>', 0)->latest()->published()->paginate(6),
            'menulist'=> $menuList,
            'visitors'=> [
                        'real_time'=> Visitors::where('isOnline', true)->count(),
                        'today'=> Visitors::whereDay('updated_at', now())->count(),
                        'month'=> Visitors::whereMonth('updated_at', now()->month)->count()
            ],
            'app_internal'=> Posts::firstWhere('slug', 'aplikasi-internal'),
            'app_umum'=>Posts::firstWhere('slug', 'aplikasi-umum'),
            'puskesmas'=> Posts::firstWhere('slug', 'puskesmas-carousel'),
            'modal'=> Posts::firstWhere('slug', 'modal')
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
            'menulist'=> $menuList,
            'visitors'=> [
                'real_time'=> Visitors::where('isOnline', true)->count(),
                'today'=> Visitors::whereDay('updated_at', now())->count(),
                'month'=> Visitors::whereMonth('updated_at', now()->month)->count()
                ]
        ]);
    }

    public function show(Posts $post)
    {
        $menu= new Menu;
        $menuList= $menu->tree();
        
        if($post->isPublished()){
            return view('post', [
                'title'=> "$post->title",
                'post'=> $post,
                'categories'=> Category::all(),
                'count'=> $post->increment('view_count'),
                'menulist'=> $menuList,
                'posts'=> Posts::where('category_id', '>', 0)->latest()->published()->paginate(4),
                'visitors'=> [
                    'real_time'=> Visitors::where('isOnline', true)->count(),
                'today'=> Visitors::whereDay('updated_at', now())->count(),
                'month'=> Visitors::whereMonth('updated_at', now()->month)->count()
                ]
            ]);
        }else{
            abort(404);
        }
    }
        
    public function menushow(Menu $menu)
    {
        $navMenu= new Menu;
        $menuList= $navMenu->tree();

        if(Posts::firstWhere('menu_id', "$menu->id")->isPublished()){
            return view('menu.show', [
                'title'=> $menu->title,
                'post'=> Posts::firstWhere('menu_id', "$menu->id"),
                'categories'=> Category::all(),
                'menulist'=> $menuList,
                'visitors'=> [
                    'real_time'=> Visitors::where('isOnline', true)->count(),
                    'today'=> Visitors::whereDay('updated_at', now())->count(),
                    'month'=> Visitors::whereMonth('updated_at', now()->month)->count()
                    ]
            ]);
        }else{
            abort(404);
        }
    }
}
