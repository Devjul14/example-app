@extends('layouts.index')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div> 
        @endif
        
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Sign in</h1>
            <form>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="username" placeholder="name@example.com" autofocus>
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-secondary mt-3" type="submit">Sign in</button>
            </form>
            <small class="d-block text-center mt-3">
                Not registered ? <a href="/register">Register</a>
            </small>
        </main>
    </div>
    </div>
@endsection