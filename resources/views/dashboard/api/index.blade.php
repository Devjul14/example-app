@extends('dashboard.layouts.main')
@section('container')

<h1 class="text-center">Author Posts</h1>
<div class="card card-default">
    <div class="card-header">Post</div>
    <div class="card-body">
        <ul class="list-group">
            @foreach ($uniqueuserIds as $item)
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">{{ $item['userId'] }}</div>
                </div>
                <div class="ms-2 me-auto">
                  <span class="badge bg-primary rounded-pill"> {{ $uniqueCount[$item['userId']] }} Post</span>
                </div>
                <a href="/testapi/{{ $item['userId'] }}" class="btn btn-sm float-right btn-success">See More</a>
              </li>
            @endforeach
        </ul>
    </div>
</div>

    
@endsection