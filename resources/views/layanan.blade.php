@extends('layouts.index')

@section('container')
<h1>Ini Layanan</h1>
@foreach ($layanan as $item)
<div>
    <p>{{ $item->description }}</p>
</div>
    
@endforeach
@endsection
    