
@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h4 class="mb-3">{{ $book->title }}</h4>

            @if ($book->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/'. $book->image) }}" alt="{{ $book->category->nama }}" class="img-fluid mt-3">
            </div>                
            @else
            <img src="https://source.unsplash.com/800x400?{{ $book->category->nama }}" alt="{{ $book->category->nama }}" class="img-fluid mt-3">                
            @endif

            <article class="my-5 fs-5">
            <p>{!! $book->sinopsis !!}</p>
            </article>

            
            <a href="/dashboard/books" class="btn btn-info"><span data-feather="arrow-left"></span> Back to Your Books</a>
            <a href="/dashboard/books/{{ $book->slug}}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/books/{{ $book->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span> Delete</button>
                </form>
        </div>
    </div>
</div>
    
@endsection