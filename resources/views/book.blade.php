
@extends('layouts/index')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $title }} </h2>

            <p>
                {{-- By. <a href="/author/{{ $book->author->username }}" class="text-decoration-none"></a> --}}
                {{-- In <a href="/categories/{{ $books->category->nama }}" class="text-decoration-none"></a> --}}
            </p>

            <p>{{ $books->sinopsis }}</p>

            <a href="/book">Back</a>
        </div>
    </div>
</div>
    
@endsection