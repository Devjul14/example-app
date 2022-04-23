
@extends('layouts/index')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $title }} </h2>

            <h4>{{ $book->judul }}</h4>
            <p>
                {{-- By. <a href="/author/{{ $book->author->username }}" class="text-decoration-none"></a> --}}
                In <a href="/categories/{{ $book->category->slug }}" class="text-decoration-none">{{ $book->category->nama }}</a>
            </p>
            <p>{{ $book->sinopsis }}</p>

            <a href="/book">Back</a>
        </div>
    </div>
</div>
    
@endsection