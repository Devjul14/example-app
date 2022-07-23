@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Api test</h1>
  </div>

<div class="col-lg-6">
    <form action="" method="post" enctype="multipart/form-data">
      @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label @error('title') is-invalid @enderror ">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="" autofocus required>
          @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label @error('slug') is-invalid @enderror">Slug</label>
          <input type="text" class="form-control" id="slug" name="slug" value="" required>
          @error('slug')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-3">Update</button>
    </form>

</div>

@endsection