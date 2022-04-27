@extends('layouts/index')

@section('container')
<h1 class="mb-5">Book Category : </h1>

<div class="container">
    <div class="row">
        @foreach ($categories as $item)
        <div class="col-md-4 mb-3">
            <a href="/categories/{{ $item->nama }}">
            <div class="card bg-dark text-white">
                <img src="https://source.unsplash.com/500x500?{{ $item->nama }}" class="card-img" alt="{{ $item->nama }}">
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $item->nama }}</h5>
                  </div>
              </div>
            </a>
        </div>
        @endforeach        
    </div>
</div>
    
@endsection