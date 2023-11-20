@extends('layout')

@section('content')
      
<div class="container ">
  
  <div class="d-flex align-items-center py-4 bg-body-tertiary">
    <div class="form-signin w-50 m-auto">
      <h2 class="align-items-center">Welcome Back!</h2>
    <form>
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
      </div>
      <div class="form-check text-start my-3">
          <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
          Remember me
          </label>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
    </form>
  </div>
  </div>
</div>
@endsection

