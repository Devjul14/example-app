@extends('layouts.index')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">
                @csrf 
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  id="name"  placeholder="Name" value="{{ old('name') }}" required autofocus>
                    <label for="name">Name</label>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}" required>
                    <label for="name">Username</label>
                    @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}" required>
                    <label for="name">Email</label>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
                    <label for="name">Password</label>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <button class="w-100 btn btn-lg btn-secondary mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">
                Already registered ? <a href="/login">Sign in</a>
            </small>
        </main>
    </div>
    </div>
@endsection