@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="/css/ck-tables.css">
    <div class="container container-fluid">
        <div class="row">
            <div class="col-sm-8 mt-3">
                <article class="d-flex flex-column">
                    <h2 class="title">{{ $post->title }}</h2>
                    @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded" alt="{{ $post->image }}">
                    @else
                        @if ($post->category_id > 0)
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->slug }}" alt="{{ $post->category->slug }}" class="img-fluid rounded">
                        @endif
                        @if($post->menu_id > 0)
                        <img src="https://source.unsplash.com/1200x400?{{ $post->menu->slug }}" alt="{{ $post->menu->slug }}" class="img-fluid rounded">
                        @endif
                    @endif
                    <br>
                    <small><i class="bi bi-clock"></i> Dibuat pada {{ $post->created_at->diffForHumans() }}  <i class="bi bi-people"></i> Dilihat {{ $post->view_count }}x</small>
                    
                    <div class="mb-3 mt-3 overflow-x-auto">
                        {!! $post->body !!}
                    </div>
                </article>
                <a href="/" class="text-decoration-none btn btn-outline-primary">Back</a>
            </div>
            <div class="col-sm-4 mt-lg-5 post-mobile">
                <div class="card my-2" style="width: auto; background-color: red;">
                    <div class="card-header" style="color: white;">
                      Kategori
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($categories as $category)
                        <li class="list-group-item"><a href="/posts?category={{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <h5>Berita Lainnya</h5>
                @foreach ($posts as $item)
                    @if ($item->slug != $post->slug)
                    <div class="card my-2">
                        @if ($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top img-fluid" alt="...">
                        @endif
                        <div class="card-body" style="width: auto;">
                            <small class="mb-1"> {{ $item->created_at->diffForHumans() }} • {{ $item->author->name }} </small>
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <small><a href="/posts?category={{ $item->category->slug }}" class="text-decoration-none">{{ $item->category->name }}</a></small>
                            <p class="card-text">{!! $item->excerpt !!}</p>
                            <a href="/post/{{ $item->slug }}" class="btn btn-outline-primary"><small>Selengkapnya...</small></a>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
<script src="/js/postTable.js"></script>
@endsection