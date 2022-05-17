@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Your Book</h1>
  </div>

<div class="col-lg-6">
    <form action="/dashboard/books" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label @error('title') is-invalid @enderror ">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" autofocus required>
          @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label @error('slug') is-invalid @enderror">Slug</label>
          <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" required>
          @error('slug')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="category_id" class="form-label">Category</label>
          <select class="form-select" aria-label="Default select example" name="category_id">
            @foreach ($categories as $category)
            @if (old('category_id') == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->nama }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->nama }}</option>
            @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label @error('image') is-invalid @enderror">Book Image</label>
          <img class="img-preview img-fluid mb-3 col-sm-5">
          <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="sinopsis" class="form-label">Sinopsis</label>
          @error('sinopsis')
              <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="sinopsis" type="hidden" name="sinopsis" value="{{ old('sinopsis') }}">
          <trix-editor input="sinopsis"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Post</button>
    </form>
</div>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function(){
    fetch('/dashboard/books/checkSlug?title=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const blob = URL.createObjectURL(image.files[0]);
    imgPreview.src = blob;
  }
</script>
@endsection