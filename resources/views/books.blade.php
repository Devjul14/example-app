@extends('layouts/index')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/book">
      @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}" autocomplete="off">
          <button class="btn btn-outline-secondary" type="submit" >Search</button>
        </div>
      </div>
    </form>
  </div>

@if ($books->count())
<div class="card mb-4">
    <img src="https://source.unsplash.com/700x200?{{ $books[0]->category->nama }}" class="card-img-top" alt="{{ $books[0]->category->nama }}">
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/book/{{ $books[0]->slug }}" class="text-decoration-none text-dark">{{ $books[0]->judul }}</a></h3>
      <p><small class="text-muted">
          By. <a href="/book?author={{ $books[0]->author->username }}" class="text-decoration-none">{{ $books[0]->author->name }}</a>
        in <a href="/book?category={{ $books[0]->category->slug }}" class="text-decoration-none">{{ $books[0]->category->nama }}</a> {{ $books[0]->created_at->diffForHumans() }}
    </small></p>    

      <p class="card-text">{{ $books[0]->sinopsis }}</p>

      <a href="/book/{{ $books[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
    </div>
  </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($books->skip(1) as $item)
        
        <div class="col-md-4 mb-3">
            <div class="card" >
                <img src="https://source.unsplash.com/500x400?{{ $item->category->nama }}" class="card-img-top" alt="{{ $item->category->nama }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->judul }}</h5>
                    <p><small class="text-muted">
                        By. <a href="/book?author={{ $item->author->username }}" class="text-decoration-none">{{ $item->author->name }}</a> 
                        in <a href="/book?category={{ $item->category->slug }}" class="text-decoration-none">{{ $item->category->nama }}</a> {{ $item->created_at->diffForHumans() }}
                  </small></p>    
                    <p class="card-text">{{ $item->sinopsis }}</p>
                    <a href="/book/{{ $item->slug }}" class="btn btn-primary">Read More</a>
                </div>
              </div>
        </div>
            
        @endforeach
    </div>
    <div class="d-flex justify-content-end">
      {{ $books->links() }}
      </div>
</div>

@else
<p class="text-center fs-3">No Book Found</p>
@endif


@endsection