@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <article>
                <h1 class="mb-3">{{ $post->title }}</h1>
                <small>
                    <a href="/dashboard/posts" class="btn btn-success">Kembali</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        
                        <button class="btn btn-danger border-0" onclick="return confirm('Delete?')"><i class="bi bi-x-circle"></i>Delete</button>
                      </form>
                </small>

                @if ($post->image)
                <div class="row my-2" style="max-height: 350px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
                </div>   
                @else
                <div class="row my-2">
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
                @endif

                {!! $post->body !!}
            </article>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <h5 class="card-header">Status</h5>
            <div class="card-body">
              <h5 class="card-title">Created at: {{ $post->created_at }}</h5>
              <p class="card-text">{{ $post->isPublished() ? "Published at: $post->published_at" : "Drafted"}}</p>
              <small class="d-flex flex-row">
                  <form action="/dashboard/posts/{{ $post->slug }}/publish" method="post" enctype="multipart/form-data">
                    @csrf
                    <button type="submit" class="mx-1 btn btn-outline-success {{ $post->isPublished() ? 'active' : '' }}">Publish</button>
                </form>
                <form action="/dashboard/posts/{{ $post->slug }}/unpublish" method="post" enctype="multipart/form-data">
                    @csrf
                    <button type="submit" class="mx-1 btn btn-outline-warning {{ $post->isUnpublished() ? 'active' : '' }}">Draft</button>
                </form>
              </small>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection