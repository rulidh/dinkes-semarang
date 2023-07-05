<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Category;

class PostsController extends Controller
{
    public function index()
    {
        return view('home', [
            'title'=> 'Dinas Kesehatan Kota Semarang',
            'posts'=> Posts::latest()->paginate(6)
        ]);
    }

    public function getAll()
    {
        if(request('category')){
            Category::firstWhere('slug', request('category'));
        }

        return view('posts', [
            'title'=> 'Berita Terkini',
            'posts'=> Posts::latest()->filter(request(['search', 'category']))->paginate(9)->withQueryString()
        ]);
    }

    public function show(Posts $post)
    {
        return view('post', [
            'title'=> "$post->title",
            'post'=> $post,
            'categories'=> Category::all()
        ]);
    }
}
