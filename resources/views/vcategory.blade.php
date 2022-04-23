@extends('layouts/index')

@section('container')
<h1 class="mb-5">Book Category : {{ $category }}</h1>

@foreach ($books as $item)
<article class="mb-5 border-bottom pb-4">
    <h2><a href="/book/{{ $item->slug }}" class="text-decoration-none">{{ $item->judul }}</a></h2>

    {{-- <p>By. <a href="/authors/{{ $item->authors->username }}" class="text-decoration-none">{{ $item->author->name }}</a> --}}
    {{-- in <a href="/categories/{{ $item->category->nama }}" class="text-decoration-none">{{ $item->category->nama }}</a></p>     --}}

    <p>{{ $item->sinopsis }}</p>
</article>
    
@endforeach
    
@endsection