@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Tambah Kategori</h2>
</div>

<div class="col-lg-8">
    <form action="/dashboard/categories" method="post" class="mb-5">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Kategori</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
          @error('name')
          <small>
            <div class="is-invalid">
              {{ $message }}
            </div>
          </small>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}" required>
          <small>
            @error('slug')
            <div class="is-invalid">
              {{ $message }}  
            </div>   
            @enderror
          </small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
<script>
    const name= document.querySelector('#name');
    const slug= document.querySelector('#slug');
    
    name.addEventListener('change', function(){
      fetch('/dashboard/categories/checkSlug?name=' + name.value)
      .then(response=> response.json())
      .then(data=> slug.value= data.slug)
    });
</script>
@endsection