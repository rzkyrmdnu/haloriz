@extends('layouts.registration')

@section('container')
<div class="row justify-content-center py-5">
    <div class="col-lg-4">

      @if (session()->has('succes'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('succes') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <h1 class="mb-3 fw-bold text-center text-primary">HALORIZ</h1>
        <div class="card border-0 shadow rounded-3">
            <div class="card-body">
                <h5 class="mb-3 fw-normal text-center">Please login</h5>
                <form action="/login" method="post">
                  @csrf
                <div class="form-floating mb-3">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                  <label for="email">Email address</label>
                  @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                  @enderror
                </div>
                <div class="form-floating">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                  <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary my-3" type="submit">Log in</button>
              </form>
              <small class="d-block text-center">Not registered? <a href="/register" class="text-decoration-none">Register Now!</a></small>
              </div>
            </div>
    </div>
</div>
@endsection
