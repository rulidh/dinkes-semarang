@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>List Menu</h2>
</div>
@if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="table-responsive small col-lg-8">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Parent Menu</th>
                <th scope="col">Slug</th>
                <th scope="col">Urutan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $menu->title }}</td>
                    @if($menu->parent_id) 
                    <td>{{ $menu->parent->title }}</td> 
                    @else 
                    <td class="text-danger">No Parent</td>
                    @endif
                    
                    <td>{{ $menu->slug }}</td>
                    <td>{{ $menu->sort_order }}</td>
                    <td>
                        <a href="/dashboard/menu/{{ $menu->slug }}/edit" class="badge bg-warning text-decoration-none"><i class="bi bi-pencil-square d-flex align-items-center justify-content-center"></i></a>
                        <form action="/dashboard/menu/{{ $menu->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0 text-decoration-none" onclick="return confirm('Hapus?')"><i class="bi bi-x-circle d-flex align-items-center justify-content-center"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $menus->links() }}
</div>
@endsection