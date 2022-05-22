@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Book Category List</h1>
  </div>

  @if (session()->has('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
  @endif

  <div class="table-responsive col-lg-6">
    <a href="/dashboard/categories/create" class="btn btn-info my-2 mx-2"><span data-feather="plus-circle"></span> New Category</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->nama }}</td>
          <td>
            <a href="/dashboard/categories/{{ $item->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="/dashboard/categories/{{ $item->slug}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/categories/{{ $item->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>        
        @endforeach
      </tbody>
    </table>
  </div>

  
@endsection