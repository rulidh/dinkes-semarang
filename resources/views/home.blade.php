@extends('layouts.main')

@section('container')
{{-- Highchart Script --}}
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript" src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

{{-- Carousel Image Berita --}}
@include('components.search-carousel')
{{-- End Carousel Image Berita --}}

{{-- Siaga Covid --}}
@include('components.siaga-covid')
{{-- End Siaga Covid --}}

{{-- Berita Dinkes --}}
<div class="container container-fluid mt-3">
  <div class="row">
    <div class="col-sm-9" id="firstCol">
      @if ($posts->count())
      <div class="row mt-1">
        <small><a href="/posts" class="text-decoration-none">Semua Berita</a></small>
        <h5>Dinas Kesehatan</h5>
        @foreach ($posts as $post)
        <div class="col-sm-4 mb-3">
          <div class="card" style="width: auto;">
            @if ($post->image)
              <img src="{{ asset('storage/' . $post->image) }}" style="height: 10rem;" class="card-img-top img-fluid" alt="...">
            @endif
            <div class="card-body">
              <small class="mb-1"> {{ $post->created_at->diffForHumans() }} • {{ $post->author->name }} </small>
              <h5 class="card-title">{{ $post->title }}</h5>
              <small><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></small>
              <p class="card-text">{!! $post->excerpt !!}</p>
              <a href="/post/{{ $post->slug }}" class="btn btn-outline-primary"><small>Selengkapnya...</small></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      @else
      <div class="d-flex align-content-center justify-content-center">
        <h5>No Post Found</h5>
      </div>
      @endif
    </div>
    {{-- End Berita Dinkes --}}

    <div class="vr mb-5 rounded rule-mobile" style="padding: 2px;"></div>

    {{-- Berita Pemkot --}}
    <div class="col-sm-1">
      <h5><a href="https://semarangkota.go.id" target="_blank" class="text-decoration-none">Berita Pemkot</a></h5>
      <div class="col-sm-4 mb-2">
        <div id="berita-pemkot"></div>
      </div>
    </div>
    {{-- End Berita Pemkot --}}
  </div>
</div>

{{-- Aplikasi Umum dan Internal --}}
@include('components.aplikasi')
{{-- End Aplikasi Umum dan Internal --}}

{{-- Lembaga Terkait --}}
@include('components.lembaga-terkait')
{{-- End Lembaga Terkait --}}

{{-- Highchart --}}
@include('components.kata-data')
{{-- End Highchart --}}

{{-- Puskesmas --}}
@include('components.puskesmas-carousel')
{{-- End Puskesmas --}}

{{-- Galeri --}}
@include('components.galeri')
{{-- End Galeri --}}

{{-- Modal --}}
@include('components.modal')
{{-- End Modal --}}

<script src="/js/home.js"></script>
@endsection