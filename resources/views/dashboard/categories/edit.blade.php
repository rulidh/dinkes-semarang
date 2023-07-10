@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Edit Kategori</h2>
</div>

<div class="col-lg-8">
    <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="mb-5">
      @method('put')  
      @csrf
        <div class="mb-3">
          <label for="name" class="form-label">name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $category->name) }}">
          @error('name')
          <small>
            <div class="is-invalid">
              {{ $message }}
            </div>
            @enderror
          </small>
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $category->slug) }}" required readonly>
          @error('slug')
           <div class="is-invalid">
            {{ $message }}  
          </div>   
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
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