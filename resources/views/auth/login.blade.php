@extends('template')

@section('main')
<div class="col-md-4">
    <form method="POST" action="{{ route('login') }}" accept-charset="UTF-8">
      @csrf
      <div class="form-group">
        <label for="email">E-mail address</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required autofocus>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">
      </div>
      <div class="form-group">
        <div class="form-check">
            <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">Remember me</label>
        </div>
      </div>
      <input type="submit" class="btn btn-default" value="Login">

      <a class="btn btn-link" href="{{ route('password.request') }}">
          Forgot your password?
      </a>
    </form>
</div>
@endsection