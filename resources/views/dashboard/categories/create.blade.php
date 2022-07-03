@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add Category</h1>
  </div>

<div class="col-lg-6">
    <form action="/dashboard/categories" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label @error('nama') is-invalid @enderror ">Category Name</label>
          <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" autofocus required>
          @error('nama')
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
          <label for="image" class="form-label @error('image') is-invalid @enderror">Category Image</label>
          <img class="img-preview img-fluid mb-3 col-sm-5">
          <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-3">Post</button>
    </form>
</div>

<script>
   //ini function untuk slug-otomatis
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
      fetch('/dashboard/books/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
    });

    //previewimage
  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const blob = URL.createObjectURL(image.files[0]);
    imgPreview.src = blob;
  }
</script>
@endsection