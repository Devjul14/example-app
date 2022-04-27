@extends('layouts/index')

@section('container')
<h1 class="mb-5">{{ $title }}</h1>

@if ($books->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/1000x400?{{ $books[0]->category->nama }}" class="card-img-top" alt="{{ $books[0]->category->nama }}">
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/book/{{ $books[0]->slug }}" class="text-decoration-none text-dark">{{ $books[0]->judul }}</a></h3>
      <p><small class="text-muted">
          By. <a href="/authors/{{ $books[0]->author->username }}" class="text-decoration-none">{{ $books[0]->author->name }}</a>
        in <a href="/categories/{{ $books[0]->category->nama }}" class="text-decoration-none">{{ $books[0]->category->nama }}</a> {{ $books[0]->created_at->diffForHumans() }}
    </small></p>    

      <p class="card-text">{{ $books[0]->sinopsis }}</p>

      <a href="/book/{{ $books[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
    </div>
  </div>
@else
<p class="text-center fs-3">No Book Found</p>
@endif

<div class="container">
    <div class="row">
        @foreach ($books->skip(1) as $item)
        
        <div class="col-md-4 mb-3">
            <div class="card" >
                <img src="https://source.unsplash.com/500x400?{{ $item->category->nama }}" class="card-img-top" alt="{{ $item->category->nama }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->judul }}</h5>
                    <p><small class="text-muted">
                        By. <a href="/authors/{{ $item->author->username }}" class="text-decoration-none">{{ $item->author->name }}</a> {{ $item->created_at->diffForHumans() }}
                  </small></p>    
                    <p class="card-text">{{ $item->sinopsis }}</p>
                    <a href="/book/{{ $item->slug }}" class="btn btn-primary">Read More</a>
                </div>
              </div>
        </div>
            
        @endforeach
    </div>
</div>

    
@endsection