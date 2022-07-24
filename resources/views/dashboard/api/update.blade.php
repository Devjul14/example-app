@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Api test</h1>
  </div>

<div class="col-lg-6">
    <form action="/testapi/{{ $id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label @error('title') is-invalid @enderror ">Title</label>
          <input type="hidden" class="form-control" id="id" name="id" value="{{ $id }}">
          <input type="text" class="form-control" id="title" name="title" value="" autofocus required>
          @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="body" class="form-label @error('body') is-invalid @enderror">Body</label>
          <input type="text" class="form-control" id="body" name="body" value="" required>
          @error('body')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-3">Update</button>
    </form>

</div>

@endsection