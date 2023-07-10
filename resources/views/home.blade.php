@extends('layouts.main')

@section('container')
{{-- Carousel Image Berita --}}
@include('components.search-carousel')
{{-- End Carousel Image Berita --}}

{{-- Berita Dinkes --}}
<div class="container container-fluid">
  <div class="row">
    <div class="col-sm-9" id="firstCol">
      <div class="row mt-1">
        <small><a href="/posts" class="text-decoration-none">Semua Berita</a></small>
        <h5>Dinas Kesehatan</h5>
        @foreach ($posts as $post)
        <div class="col-sm-4 mb-3">
          <div class="card" style="width: 16rem;">
            @if ($post->image)
              <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid" alt="...">
            @else
              <img src="https://source.unsplash.com/500x400?{{ $post->category->slug }}" alt="">  
            @endif
            <div class="card-body">
              <small class="mb-1"><i class="bi bi-clock"></i> {{ $post->created_at->diffForHumans() }} <i class="bi bi-person"></i> {{ $post->author->name }} </small>
              <h5 class="card-title">{{ $post->title }}</h5>
              <small><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></small>
              <p class="card-text">{{ $post->excerpt }}</p>
              <a href="/post/{{ $post->slug }}" class="btn btn-outline-primary"><small>Selengkapnya...</small></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    {{-- End Berita Dinkes --}}

    {{-- Berita Pemkot --}}
    <div class="col-sm-1">
      <h5 >Berita Pemkot</h5>
      <div class="col-sm-4 mb-2">
        <div class="card" style="width: 18rem;">
          <img src="/images/rumah-pelita.jpeg" class="card-img-top img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
    {{-- End Berita Pemkot --}}
  </div>
</div>

{{-- Aplikasi Umum --}}
<div id="carouselExampleCaptions" class="carousel slide mt-lg-5">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="bg-secondary">
        <div class="container container-fluid">
          <div class="row">
            <div class="col-sm-8">
              <img src="/images/rumah-pelita.jpeg" class="d-block w-100 m-lg-5 rounded" alt="...">
            </div>
            <div class="col-sm-3">
              <h1 class="pt-5 px-5">Aplikasi Umum</h1>
              <p class="px-5 pb-3">Dashboard data kesehatan dinas kesehatan kota semarang</p>
              <img src="/images/rumah-pelita.jpeg" class="d-block w-100 m-lg-5 rounded" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="bg-secondary">
        <div class="container container-fluid">
          <div class="row">
            <div class="col-sm-8">
              <img src="/images/rumah-pelita.jpeg" class="d-block w-100 m-lg-5 rounded" alt="...">
            </div>
            <div class="col-sm-3">
              <h1 class="pt-5 px-5">Aplikasi Umum</h1>
              <p class="px-5 pb-3">Dashboard data kesehatan dinas kesehatan kota semarang</p>
              <img src="/images/rumah-pelita.jpeg" class="d-block w-100 m-lg-5 rounded" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="bg-secondary">
        <div class="container container-fluid">
          <div class="row">
            <div class="col-sm-8">
              <img src="/images/rumah-pelita.jpeg" class="d-block w-100 m-lg-5 rounded" alt="...">
            </div>
            <div class="col-sm-3">
              <h1 class="pt-5 px-5">Aplikasi Umum</h1>
              <p class="px-5 pb-3">Dashboard data kesehatan dinas kesehatan kota semarang</p>
              <img src="/images/rumah-pelita.jpeg" class="d-block w-100 m-lg-5 rounded" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
{{-- End Aplikasi Umum --}}

{{-- Puskesmas dan UPTD --}}
@include('components.puskesmas-carousel')
{{-- End Puskesmas dan UPTD --}}
@endsection