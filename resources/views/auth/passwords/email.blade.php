@extends('template')

@section('main')
<div class="col-md-4">
    <h2>{{ __('Reset Password') }}</h2>
    @if ($errors->has('email'))
    <strong>{{ $errors->first('email') }}</strong>
    <br>
    @endif
    <form method="POST" action="{{ route('password.email') }}" accept-charset="UTF-8">
      @csrf
      <div class="form-group">
        <label for="email">E-mail address</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required autofocus>
      </div>
      <input type="submit" class="btn btn-default" value="{{ __('Send Password Reset Link') }}">
    </form>
</div>
@endsection
