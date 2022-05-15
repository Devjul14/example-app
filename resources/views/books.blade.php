@extends('layouts/index')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/book">
      @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      @if (request('user'))
          <input type="hidden" name="user" value="{{ request('user') }}">
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
            @if ($books[0]->image)
            <div style="max-height: 350px; overflow:hidden;" align="center">
                <img src="{{ asset('storage/'. $books[0]->image) }}" alt="{{ $books[0]->category->nama }}" class="img-fluid">
            </div>                
            @else
            <img src="https://source.unsplash.com/700x200?{{ $books[0]->category->nama }}" class="card-img-top" alt="{{ $books[0]->category->nama }}">
            @endif
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/book/{{ $books[0]->slug }}" class="text-decoration-none text-dark">{{ $books[0]->title }}</a></h3>
      <p><small class="text-muted">
          By. <a href="/book?user={{ $books[0]->user->username }}" class="text-decoration-none">{{ $books[0]->user->name }}</a>
        in <a href="/book?category={{ $books[0]->category->slug }}" class="text-decoration-none">{{ $books[0]->category->nama }}</a> {{ $books[0]->created_at->diffForHumans() }}
    </small></p>    

      <p class="card-text">{!! $books[0]->excerpt !!}</p>

      <a href="/book/{{ $books[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
        @foreach ($books->skip(1) as $book)

        <div class="col-md-4 mb-3">
            <div class="card" >
              @if ($book->image)
                  <img src="{{ asset('storage/'. $book->image) }}" alt="{{ $book->category->nama }}" class="img-fluid">
              @else
              <img src="https://source.unsplash.com/500x400?{{ $book->category->nama }}" class="card-img-top" alt="{{ $book->category->nama }}">
              @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p><small class="text-muted">
                        By. <a href="/book?user={{ $book->user->username }}" class="text-decoration-none">{{ $book->user->name }}</a> 
                        in <a href="/book?category={{ $book->category->slug }}" class="text-decoration-none">{{ $book->category->nama }}</a> {{ $book->created_at->diffForHumans() }}
                  </small></p>    
                    <p class="card-text">{!! $book->excerpt !!}</p>
                    <a href="/book/{{ $book->slug }}" class="btn btn-primary">Read More</a>
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