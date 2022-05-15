
@extends('layouts/index')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h4 class="mb-3">{{ $book->title }}</h4>
            <p>
                By. <a href="/book?user={{ $book->user->username }}" class="text-decoration-none">{{ $book->user->name }}</a>
                In <a href="/book?category={{ $book->category->slug }}" class="text-decoration-none">{{ $book->category->nama }}</a>
            </p>
            @if ($book->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/'. $book->image) }}" alt="{{ $book->category->nama }}" class="img-fluid">
            </div>                
            @else
            <img src="https://source.unsplash.com/800x400?{{ $book->category->nama }}" alt="{{ $book->category->nama }}" class="img-fluid">                
            @endif

            <article class="my-3 fs-5">
            <p>{!! $book->sinopsis !!}</p>
            </article>

            <a href="/book">Back</a>
        </div>
    </div>
</div>
    
@endsection