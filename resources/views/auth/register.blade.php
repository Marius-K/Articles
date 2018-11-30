@extends('template')

@section('main')
<h2>Registration</h2>
<div class="col-md-4">
    @if($errors->any())
    @foreach ($errors->all() as $error)
    {{ $error }}<br />
    @endforeach
    <br />
    @endif
  <br/>
  <form method="post" action="{{ route('register') }}">
    @csrf
    <div class="form-group">
      <label for="name">Full name:</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
    </div>
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="form-group">
      <label for="password-confirm">Confirm password:</label>
      <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required>
    </div>
    <button type="submit" class="btn btn-default">Register</button>
  </form>
</div>
@endsection
