<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.menu.index', [
            'title'=> 'All Menus',
            'menus'=> Menu::orderBy('sort_order')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.menu.create', [
            'title'=> 'Add Menu',
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
            'parent_id'=> 'nullable',
            'sort_order'=> 'nullable',
            'slug'=> 'required|unique:menus'
        ]);

        Menu::create($validatedData);

        return redirect('/dashboard/menu')->with('success', 'Menu berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('dashboard.menu.edit', [
            'title'=> 'Edit Menu',
            'menus'=> Menu::all(),
            'menu'=> $menu,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $rules= [
            'title'=> 'required|max:255',
            'sort_order'=> 'nullable'
        ];

        if($request->slug != $menu->slug){
            $rules['slug']= 'required|unique:menus';
        }

        $validatedData= $request->validate($rules);
        Menu::where('id', $menu->id)->update($validatedData);

        return redirect('/dashboard/categories')->with('success', 'Menu berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        Menu::destroy($menu->id);

        return redirect('/dashboard/menu')->with('success', 'Menu berhasil dihapus');
    }

    public function checkSlug(Request $request)
    {
        $slug= SlugService::createSlug(Menu::class, 'slug', $request->title);

        return response()->json(['slug'=> $slug]);
    }

    public function publish(Menu $menu)
    {
        $menu->publish();

        return redirect('/dashboard/menu')->with('success', 'Menu berhasil di publish');        
    }
    public function unpublish(Menu $menu)
    {        
        $menu->unpublish();

        return redirect('/dashboard/menu')->with('success', 'Menu berhasil di draft');
    }
}
