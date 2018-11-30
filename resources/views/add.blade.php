@extends('template')

@section('main')
<div class="col-md-6">
  
  <br/>
  <form method="post" action="{{ url('/new-article') }}">
    @csrf
    @if($errors->any())
    @foreach ($errors->all() as $error)
    {{ $error }}<br />
    @endforeach
    <br />
    @endif
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
    </div>
    <div class="form-group">
      <label for="article">Text</label>
      <textarea id="article" name="article" class="form-control" rows="5">{{ old('article') }}</textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
@endsection

<?php /*<div class="col-md-4">
    @if($errors->any())
    @foreach ($errors->all() as $error)
    {{ $error }}<br />
    @endforeach
    <br />
    @endif
    {!! Form::open(array('url' => route('login'))) !!}
      <div class="form-group">
        {!! Form::label('email', 'El. pašto adresas') !!}
        {!! Form::email('email', old('email'), array('class' => 'form-control', 'required', 'autofocus')) !!}
      </div>
      <div class="form-group">
            {!! Form::label('password', 'Slaptažodis') !!}
        {!! Form::password('password', array('class' => 'form-control')) !!}
      </div>
      <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                Remember me
            </label>
            {!! Form::checkbox('remember', '', array('class' => 'form-check-input'), old('remember')) !!}
            
            {!! Form::label('remember', 'Remember me') !!}
        </div>
      </div>
      {!! Form::submit('Prisijungti', array('class' => 'btn btn-default')) !!}

      <a class="btn btn-link" href="{{ route('password.request') }}">
          {{ __('Forgot Your Password?') }}
      </a>
    {!! Form::close() !!}
</div>*/ ?>