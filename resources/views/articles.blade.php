@extends('template')

@section('main')
<h2>Latest articles</h2>
@foreach ($articles as $article)
    <p><a href="{{ url('article/'.$article->id) }}">{{ $article->title }}</a></p>
@endforeach
@endsection