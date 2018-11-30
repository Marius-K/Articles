@extends('template')

@section('main')
<div class="col-md-4">
    <h2>{{ __('Reset Password') }}</h2>
    @if ($errors->has('email'))
    <strong>{{ $errors->first('email') }}</strong>
    <br>
    @endif
    @if ($errors->has('password'))
    <strong>{{ $errors->first('password') }}</strong>
    <br>
    @endif
    <form method="POST" action="{{ route('password.update') }}" accept-charset="UTF-8">
      @csrf
      <input type="hidden" name="token" value="{{ $token }}">
      <div class="form-group">
        <label for="email">E-mail address</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $email ?? old('email') }}" required autofocus>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="password-confirm">Confirm password</label>
        <input type="password" name="password-confirm" id="password-confirm" class="form-control" required>
      </div>
      <input type="submit" class="btn btn-default" value="{{ __('Reset Password') }}">
    </form>
</div>
@endsection