@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>All Posts</h2>
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
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Action</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        @if ($post->category_id > 0)
                        <td>{{ $post->category->name }}</td>
                        @else
                        <td class="text-danger">No Category Related</td>    
                        @endif
                        @if($post->menu_id > 0)
                        <td>{{ $post->menu->title }}</td>
                        @else
                        <td class="text-danger">No Menu Related</td>
                        @endif
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-decoration-none"><i class="bi bi-eye d-flex align-items-center justify-content-center"></i></a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning text-decoration-none"><i class="bi bi-pencil-square d-flex align-items-center justify-content-center"></i></a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0 text-decoration-none" onclick="return confirm('Hapus?')"><i class="bi bi-x-circle d-flex align-items-center justify-content-center"></i></button>
                            </form>
                        </td>
                        <td>@if ($post->isPublished())
                            <button class="bg bg-success rounded text-light" disabled="disabled">Published</button>
                        @else
                            <button class="bg bg-warning rounded text-light" disabled="disabled">Drafted</button>
                        @endif</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
