
@extends('layouts/index')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h4 class="mb-3">{{ $book->judul }}</h4>
            <p>
                By. <a href="/book?author={{ $book->author->username }}" class="text-decoration-none">{{ $book->author->name }}</a>
                In <a href="/book?category={{ $book->category->slug }}" class="text-decoration-none">{{ $book->category->nama }}</a>
            </p>
            <img src="https://source.unsplash.com/800x400?{{ $book->category->nama }}" alt="{{ $book->category->nama }}" class="img-fluid">

            <article class="my-3 fs-5">
            <p>{{ $book->sinopsis }}</p>
            </article>

            <a href="/book">Back</a>
        </div>
    </div>
</div>
    
@endsection