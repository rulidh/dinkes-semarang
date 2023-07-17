@extends('layouts.main')

@section('container')
  <div class="container container-fluid">
    <div class="row mt-1">
          <small><a href="/categories" class="text-decoration-none">Kategori Berita</a></small>
          <h5>Dinas Kesehatan</h5>
          @if ($posts->count())
          @foreach ($posts as $post)
          <div class="col-md-4 mb-3">
            <div class="card" style="width: 20rem;">
              <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
              <div class="card-body">
                <small class="mb-1"><i class="bi bi-clock"></i> {{ $post->created_at->diffForHumans() }}</small>
                <h5 class="card-title">{{ $post->title }}</h5>
                <small><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></small>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a href="/post/{{ $post->slug }}" class="btn btn-outline-primary"><small>Selengkapnya...</small></a>
              </div>
            </div>
          </div>
          @endforeach
          @else
          <div class="mb-3">
            <h4 class="text-center">No Posts Found</h4>
          </div>
          @endif
    </div>
  </div>
@endsection