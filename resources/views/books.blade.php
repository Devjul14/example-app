@extends('layouts/index')

@section('container')
<h1 class="mb-5">{{ $title }}</h1>

@foreach ($books as $book)
<article class="mb-5 border-bottom pb-4">
    <h2><a href="/books/{{ $book->judul }}" class="text-decoration-none">{{ $book->title }}</a></h2>

    {{-- <p>By. <a href="/authors/{{ $book->author->username }}" class="text-decoration-none">{{ $book->author->name }}</a> --}}
    in <a href="/categories/{{ $book->category->judul }}" class="text-decoration-none">{{ $book->category->nama }}</a></p>    

    <p>{{ $book->sinopsis }}</p>
</article>
    
@endforeach
    
@endsection