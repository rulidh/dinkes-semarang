<div id="carousel" class="carousel slide mb-lg-5" data-bs-touch="true">
    <div class="carousel-inner">
      @if ($posts->count())
      <div class="carousel-item active">
        @if ($posts[0]->image)
        <img src="{{ asset('storage/' . $posts[0]->image) }}" class="d-block w-100" alt="...">
        @else
        <img src="/images/rumah-pelita.jpeg" alt="">
        @endif
      </div>
      @else
      <img src="/images/rumah-pelita.jpeg" alt="">
      @endif
      @foreach ($posts->skip(1) as $post)
      <div class="carousel-item">
        @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" class="d-block w-100 img-fluid" alt="...">
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