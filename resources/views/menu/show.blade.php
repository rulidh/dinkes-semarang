@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="/css/style.css">
<div class="container container-fluid">
    <div class="row">
        <div class="mt-3 col-lg-10">
        @if ($post!= null)
            <article class="d-flex flex-column">
                <h2 class="title">{{ $post->title }}</h2>
                @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->image }}">
                @endif
                <small><i class="bi bi-clock"></i> Dibuat pada {{ $post->created_at->diffForHumans() }}</small>
                
                <div class="mb-3 mt-3">
                    {!! $post->body !!}
                </div>
            </article>
            <a href="/" class="text-decoration-none btn btn-outline-primary">Back</a>
        @else
            <h2 class="title text-center">No post Found</h2>
        @endif
        </div>
    </div>
</div>
<script src="/js/postTable.js"></script>
@endsection