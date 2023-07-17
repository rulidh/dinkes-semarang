<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'title'=> 'Semua Posts',
            'posts'=> Posts::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.posts.create', [
            'title'=> 'Tambah Berita Baru',
            'categories'=> Category::all(),
            'menus'=> Menu::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData= $request->validate([
            'title'=> 'required|max:255',
            'slug'=> 'required|unique:posts',
            'category_id'=> 'nullable',
            'menu_id'=> 'nullable',
            'image'=> 'image|file|max:2048',
            'body'=> 'required'
        ]);

        if($request->menu_id > 0){
            $validatedData['category_id']= 0;
        }
        
        if($request->file('image')){
            $validatedData['image']= $request->file('image')->store('post-images');
        }

        $validatedData['user_id']= auth()->user()->id;
        $validatedData['excerpt']= Str::limit(strip_tags($request->body), 200);

        Posts::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Post baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $post)
    {
        return view('dashboard.posts.show', [
            'title'=> $post->title,
            'post'=> $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $post)
    {
        return view('dashboard.posts.edit', [
            'title'=> 'Edit Berita',
            'post'=> $post,
            'categories'=> Category::all(),
            'menus'=> Menu::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $post)
    {
        $rules= [
            'title'=> 'required|max:255',
            'category_id'=> 'nullable',
            'menu_id'=> 'nullable',
            'body'=> 'required'
        ];

        $rules['image']= 'image|file|max:2048';

        
        if($request->slug != $post->slug){
            $rules['slug']= 'required|unique:posts';
        }

        
        $validatedData= $request->validate($rules);
        
        if($request->menu_id > 0){
            $validatedData['category_id']= 0;
        }

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image']= $request->file('image')->store('post-images');
        }

        $validatedData['user_id']= auth()->user()->id;
        $validatedData['excerpt']= Str::limit(strip_tags($request->body), 200);

        Posts::where('id', $post->id)->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Post berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $post)
    {
        if($post->image){
            Storage::delete($post->image);
        }
        Posts::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Post berhasil dihapus');
    }

    public function checkSlug(Request $request)
    {
        $slug= SlugService::createSlug(Posts::class, 'slug', $request->title);

        return response()->json(['slug'=> $slug]);
    }

    public function publish(Posts $post)
    {
        $post->publish();

        return redirect('/dashboard/posts')->with('success', 'Post berhasil di publish');        
    }
    public function unpublish(Posts $post)
    {        
        $post->unpublish();

        return redirect('/dashboard/posts')->with('success', 'Post berhasil di draft');
    }
}
