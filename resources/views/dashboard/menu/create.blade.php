@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Tambah Menu</h2>
</div>

<div class="col-lg-8">
    <form action="/dashboard/menu" method="post" class="mb-5">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Menu</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
          @error('title')
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
        <div class="mb-3">
            <label for="menu" class="form-label">Parent Menu</label>
            <select name="parent_id" class="form-select" id="parent_id">
                <option value="0">No Parent Menu</option>
              @foreach ($menus as $menu)
              @if ($menu->parent_id == 0)
              <option value="{{ $menu->id }}">{{ $menu->title }}</option>
              @endif
              @endforeach
            </select>
        </div>
        <div class="mb-3">
            
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
<script>
    const title= document.querySelector('#title');
    const slug= document.querySelector('#slug');
    
    title.addEventListener('change', function(){
      fetch('/dashboard/menu/checkSlug?title=' + title.value)
      .then(response=> response.json())
      .then(data=> slug.value= data.slug)
    });
</script>
@endsection