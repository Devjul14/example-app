@extends('dashboard.layouts.main')
@section('container')
<div class="card">
    <h5 class="card-header text-center">Post Of Author</h5>
    <div class="card-body">
        @foreach ($collections as $item)
      <h5 class="card-title text-center">{{ $item['title'] }}</h5>
      <p class="card-text">{{ $item['body'] }}</p>
      <a href="/testapi/{{ $item['id']}}/edit" class="btn btn-sm bg-warning center"><span data-feather="edit"></span></a>
      @endforeach
    </div>
  </div>       
        
@endsection