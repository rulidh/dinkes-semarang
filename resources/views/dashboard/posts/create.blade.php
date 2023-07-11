@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Tambah Berita</h2>
</div>

<div class="col-lg-8">
    <form action="/dashboard/posts" method="post" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Judul</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
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
          <label for="category" class="form-label">Kategori</label>
          <select name="category_id" class="form-select" id="category_id">
            @foreach ($categories as $category)
            @if (old('category_id') == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else    
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Tambah Foto (Optional)</label>
          <img class="img-preview img-fluid mb-3 col-sm-5">
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
              <div class="is-invalid">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
            <textarea name="body" id="body">{!! Request::old('body') !!}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
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

    ClassicEditor
        .create(document.querySelector('#body'))
        .then(editor=> {
            console.log(editor);
            
        })
        .catch(error=> {
            console.error(error);
        });

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