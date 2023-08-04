@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Edit Berita</h2>
</div>

<div class="col-lg-8">
    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="mb-5" enctype="multipart/form-data">
      @method('put')  
      @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
          @error('title')
          <small>
            <div class="is-invalid">
              {{ $message }}
            </div>
            @enderror
          </small>
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $post->slug) }}" required>
          @error('slug')
           <div class="is-invalid">
            {{ $message }}  
          </div>   
          @enderror
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select name="category_id" class="form-select" id="category_id">
            @foreach ($categories as $category)
            @if (old('category_id', $post->category_id) == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else    
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="menu" class="form-label">Menu</label>
          <select name="menu_id" class="form-select" id="menu_id">
            <option value="0">No Menu</option>
            @foreach ($menus as $menu)
            @if (old('menu_id', $post->menu_id) == $menu->id)
              <option value="{{ $menu->id }}" selected>{{ $menu->title }}</option>
            @else    
              <option value="{{ $menu->id }}">{{ $menu->title }}</option>
            @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Post image</label>
          <input type="hidden" name="oldImage" id="oldImage" value="{{ $post->image }}">
          @if ($post->image)
          <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
          @else
          <img class="img-preview img-fluid mb-3 col-sm-5">
          @endif
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
              <div class="is-invalid">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea name="body" id="body">{!! Request::old('body', $post->body) !!}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</div>

<script>
    const title= document.querySelector('#title');
    const slug= document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response=> response.json())
            .then(data=> slug.value= data.slug)
    });

    // CKEditor
    CKEDITOR
        .replace('body', {
            filebrowserUploadUrl: "{{ route('image.upload', ['_token' => csrf_token() ]) }}",
            filebrowserUploadMethod: 'form'
        })
        .catch( error => {
            console.error( error );
        } );

    function previewImage(){
      const image= document.querySelector('#image');
      const imgPreview= document.querySelector('.img-preview');

      imgPreview.style.display= 'block';

      const oFReader= new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload= function(oFREvent){
        imgPreview.src= oFREvent.target.result;
      }
    }
</script>
@endsection