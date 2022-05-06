
@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h4 class="mb-3">{{ $book->title }}</h4>

            <img src="https://source.unsplash.com/800x400?{{ $book->category->nama }}" alt="{{ $book->category->nama }}" class="img-fluid mt-3">

            <article class="my-5 fs-5">
            <p>{{ $book->sinopsis }}</p>
            </article>

            
            <a href="/dashboard/books" class="btn btn-info"><span data-feather="arrow-left"></span> Back to Books</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
        </div>
    </div>
</div>
    
@endsection