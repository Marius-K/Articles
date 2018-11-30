@extends('template')

@section('main')
<div class="col-md-6">
  
  <br/>
  <form method="post" action="">
    @method("put")
    @csrf
    @if($errors->any())
    @foreach ($errors->all() as $error)
    {{ $error }}<br />
    @endforeach
    <br />
    @endif
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" required>
    </div>
    <div class="form-group">
      <label for="article">Text</label>
      <textarea id="article" name="article" class="form-control" rows="5">{{ $article->article }}</textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
@endsection