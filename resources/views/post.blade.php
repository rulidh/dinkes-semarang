@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="/css/style.css">
    <div class="container container-fluid">
        <div class="row">
            <div class="col-sm-8 mt-3">
                <article>
                    <h2 class="title">{{ $post->title }}</h2>
                    @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->image }}">
                    @else
                        @if ($post->category_id > 0)
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->slug }}" alt="{{ $post->category->slug }}" class="img-fluid rounded">
                        @endif
                        @if($post->menu_id > 0)
                        <img src="https://source.unsplash.com/1200x400?{{ $post->menu->slug }}" alt="{{ $post->menu->slug }}" class="img-fluid rounded">
                        @endif
                    @endif
                    <small><i class="bi bi-clock"></i> Dibuat pada {{ $post->created_at->diffForHumans() }}</small>
                    
                    <div class="mb-3 mt-3">
                        {!! $post->body !!}
                    </div>
                </article>
                <a href="/" class="text-decoration-none btn btn-outline-primary">Back</a>
            </div>
            <div class="col-sm-4 mt-lg-5">
                <div class="card my-3" style="width: 18rem; background-color: red;">
                    <div class="card-header" style="color: white;">
                      Kategori
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($categories as $category)
                        <li class="list-group-item"><a href="/posts?category={{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                  </div>
            </div>
        </div>
    </div>
<script src="/js/postTable.js"></script>
@endsection