@extends('layouts.blank', ['title' => 'Register'])

@section('css')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Register</h5>

      <!-- Floating Labels Form -->
      <form class="row g-3" method="post" action="/login">
        @csrf
        <div class="col-12">
          <div class="form-floating">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            <label for="email">Name</label>
          </div>
        </div>
        <div class="col-12">
          <div class="form-floating">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="col-12">
          <div class="form-floating">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <label for="password">Password</label>
          </div>
        </div>
        <a href="/login" class="text-secondary">Login</a>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form><!-- End floating Labels Form -->

    </div>
  </div>
@endsection

@section('script')
@endsection