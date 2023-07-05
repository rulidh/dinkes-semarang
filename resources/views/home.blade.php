@extends('layouts.main')

@section('container')
{{-- Carousel Image Berita --}}
<div id="carousel" class="carousel slide mb-lg-5" data-bs-touch="true">
  <div class="carousel-inner">
    @foreach ($posts as $post)
    <div class="carousel-item active">
      @if ($post->image)
      <img src="https://source.unsplash.com/1440x720?{{ $post->category->slug }}" alt="">
      @else
      <img src="/images/rumah-pelita.jpeg" class="d-block w-100" alt="...">
      @endif
    </div>
    @endforeach
    <div class="card-img-overlay container-fluid d-flex flex-column justify-content-center" style="width: 25rem;">
      <img src="/images/logo-dinkes.png" height="100" width="75" alt="">
      <h5 class="card-title text-light" style="font-size: 1.5vw"><strong>MAKLUMAT PELAYANAN</strong></h5>
      <p class="card-text text-light" style="font-size: 1.2vw">Bekerja dengan Sepenuh Hati dan Ikhlas untuk Memberikan Pelayanan Terbaik untuk masyarakat.</p>
      <form action="/posts">
        @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Apa yang anda cari?" name="search" value="{{ request('search') }}">
          <button class="btn btn-outline-light" id="basic-addon2">Search</button>
        </div>
      </form>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
{{-- End Carousel Image Berita --}}

{{-- Berita Dinkes --}}
<div class="container container-fluid">
  <div class="row">
    <div class="col-sm-8" id="firstCol">
      <div class="row mt-1">
        <small><a href="/posts" class="text-decoration-none">Semua Berita</a></small>
        <h5>Dinas Kesehatan</h5>
        @foreach ($posts as $post)
        <div class="col-md-4 mb-3">
          <div class="card" style="width: 14rem;">
            <img src="/images/rumah-pelita.jpeg" class="card-img-top" alt="...">
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
      </div>
    </div>
    <div class="col-sm-4">
      <h5 class="mt-4">Berita Pemkot</h5>
      <div class="col-sm-4 mb-2">
        <div class="card" style="width: 18rem;">
          <img src="/images/rumah-pelita.jpeg" class="card-img-top" alt="..." height="125">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Berita Dinkes --}}

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
<div class="container text-center mt-lg-5">
  <h3 class="font-weight-light">Puskesmas dan UPTD</h3>
  <p class="font-weight-light">Kami mengutamakan pelayanan masyarakat di Puskesmas dan UPTD Semarang.</p>
  <div class="row mx-auto my-auto">
      <div id="recipeCarousel" class="carousel recipe-carousel slide w-100" data-ride="carousel">
          <div class="carousel-inner carousel-inners w-100" role="listbox">
              <div class="carousel-item carousel-items active">
                  <div class="col-md-4">
                      <div class="card card-body">
                          <img class="img-fluid" src="/images/rumah-pelita.jpeg">
                      </div>
                  </div>
              </div>
              <div class="carousel-item carousel-items">
                  <div class="col-md-4">
                      <div class="card card-body">
                          <img class="img-fluid" src="/images/rumah-pelita.jpeg">
                      </div>
                  </div>
              </div>
              <div class="carousel-item carousel-items">
                  <div class="col-md-4">
                      <div class="card card-body">
                          <img class="img-fluid" src="/images/rumah-pelita.jpeg">
                      </div>
                  </div>
              </div>
              <div class="carousel-item carousel-items">
                  <div class="col-md-4">
                      <div class="card card-body">
                          <img class="img-fluid" src="/images/rumah-pelita.jpeg">
                      </div>
                  </div>
              </div>
              <div class="carousel-item carousel-items">
                  <div class="col-md-4">
                      <div class="card card-body">
                          <img class="img-fluid" src="/images/rumah-pelita.jpeg">
                      </div>
                  </div>
              </div>
              <div class="carousel-item carousel-items">
                  <div class="col-md-4">
                      <div class="card card-body">
                          <img class="img-fluid" src="/images/rumah-pelita.jpeg">
                      </div>
                  </div>
              </div>
          </div>
          <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
              <span class="bg-dark border bi bi-caret-left border-dark rounded" aria-hidden="true"></span>
              <span class="sr-only"></span>
          </a>
          <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
              <span class="bg-dark border bi bi-caret-right border-dark rounded" aria-hidden="true"></span>
              <span class="sr-only"></span>
          </a>
      </div>
  </div>
</div>
{{-- End Puskesmas dan UPTD --}}
@endsection