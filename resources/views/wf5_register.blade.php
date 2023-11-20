@extends('layout')

@section('content')

<div class="container">
    <div class="d-flex align-items-center py-4 bg-body-tertiary">
       <div class="form-signin w-50 m-auto">
          <form>
             <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" required>
             </div>
             <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
             </div>
             <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" required>
             </div>
             <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password" required>
             </div>
             <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="terms" required>
                <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
             </div>
             <button type="submit" class="btn btn-primary">Register</button>
          </form>
       </div>
    </div>
 </div>
@endsection