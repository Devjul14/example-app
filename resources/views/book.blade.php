
@extends('layouts/index')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $title }} </h2>

            <h4>{{ $book->judul }}</h4>
            <p>
                By. <a href="/authors/{{ $book->author->username }}" class="text-decoration-none">{{ $book->author->name }}</a>
                In <a href="/categories/{{ $book->category->nama }}" class="text-decoration-none">{{ $book->category->nama }}</a>
            </p>
            <p>{{ $book->sinopsis }}</p>

            <a href="/book">Back</a>
        </div>
    </div>
</div>
    
@endsection